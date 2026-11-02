<?php

declare(strict_types=1);

use App\Filament\Exports\DoorExporter;
use App\Filament\Resources\Doors\DoorResource;
use App\Filament\Resources\Doors\Pages\ListDoors;
use App\Models\Category;
use App\Models\Door;
use App\Models\User;
use Filament\Actions\ExportAction;
use Filament\Actions\Exports\Models\Export;
use Filament\Actions\Testing\TestAction;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Livewire;

use function Pest\Laravel\actingAs;

beforeEach(function (): void {
    actingAs(User::factory()->create(['password' => bcrypt('password')]));
});

it('renders the doors list in the admin panel', function (): void {
    Door::factory()->create(['category_id' => Category::factory()->create()->id]);

    $this->get(DoorResource::getUrl('index'))->assertOk();
});

it('exports the doors with prices, respecting the collection filter', function (): void {
    $alfa = Category::factory()->create(['name' => 'Alfa']);
    $alfaDoor = Door::factory()->create(['category_id' => $alfa->id]);
    Door::factory()->create(['category_id' => Category::factory()->create()->id]);
    $exports = ExportAction::fake();

    Livewire::test(ListDoors::class)
        ->filterTable('category_id', $alfa->id)
        ->callAction(TestAction::make('export')->table())
        ->assertHasNoFormErrors();

    $exports->assertDispatched(DoorExporter::class, function (Export $export, Builder $query, array $columnMap) use ($alfaDoor): bool {
        return $query->pluck('id')->all() === [$alfaDoor->id]
            && $columnMap['price'] === 'Ár'
            && $columnMap['category.name'] === 'Kollekció';
    });
});

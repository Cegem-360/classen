<?php

declare(strict_types=1);

use App\Exports\DoorPricesExport;
use App\Filament\Resources\Doors\DoorResource;
use App\Filament\Resources\Doors\Pages\ListDoors;
use App\Models\Category;
use App\Models\Door;
use App\Models\User;
use Filament\Actions\Testing\TestAction;
use Livewire\Livewire;
use Maatwebsite\Excel\Facades\Excel;

use function Pest\Laravel\actingAs;

it('renders the doors list in the admin panel', function (): void {
    actingAs(User::factory()->create(['password' => bcrypt('password')]));
    $category = Category::factory()->create();
    Door::factory()->create(['category_id' => $category->id]);

    $this->get(DoorResource::getUrl('index'))->assertOk();
});

it('downloads the doors with prices, respecting the collection filter', function (): void {
    Excel::fake();
    actingAs(User::factory()->create(['password' => bcrypt('password')]));
    $alfa = Category::factory()->create(['name' => 'Alfa']);
    $beta = Category::factory()->create(['name' => 'Beta']);
    $alfaDoor = Door::factory()->create(['category_id' => $alfa->id, 'price' => 55000]);
    Door::factory()->create(['category_id' => $beta->id]);

    Livewire::test(ListDoors::class)
        ->filterTable('category_id', $alfa->id)
        ->callAction(TestAction::make('exportDoorPrices')->table());

    Excel::assertDownloaded('ajtok-arak-'.now()->format('Y-m-d').'.xlsx', function (DoorPricesExport $export) use ($alfaDoor): bool {
        $rows = $export->query()->get();

        return $rows->pluck('id')->all() === [$alfaDoor->id]
            && $export->map($rows->first())[3] === 'Alfa'
            && $export->map($rows->first())[6] === 55000;
    });
});

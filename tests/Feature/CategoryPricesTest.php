<?php

declare(strict_types=1);

use App\Filament\Resources\Categories\Pages\ListCategories;
use App\Models\Category;
use App\Models\Door;
use App\Models\User;
use Filament\Actions\Exports\Models\Export;
use Filament\Actions\Testing\TestAction;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;

use function Pest\Laravel\actingAs;

beforeEach(function (): void {
    Storage::fake(config('filament.default_filesystem_disk'));
    actingAs(User::factory()->create(['password' => bcrypt('password')]));
});

it('no longer exposes the public price import page', function (string $uri): void {
    $this->get($uri)->assertNotFound();
})->with(['/category-import', '/category-proccess']);

it('exports one row per collection with its most common door price', function (): void {
    $alfa = Category::factory()->create(['name' => 'Alfa']);
    Door::factory()->count(2)->create(['category_id' => $alfa->id, 'price' => 50000]);
    Door::factory()->create(['category_id' => $alfa->id, 'price' => 60000]);
    Category::factory()->create(['name' => 'Beta']);

    Livewire::test(ListCategories::class)
        ->callAction(TestAction::make('export'));

    $export = Export::query()->sole();
    $csv = collect($export->getFileDisk()->files($export->getFileDirectory()))
        ->filter(fn (string $path): bool => str_ends_with($path, '.csv'))
        ->map(fn (string $path): string => $export->getFileDisk()->get($path))
        ->implode('');

    expect($csv)->toContain('Alfa,50000')->toContain('Beta,0');
});

it('imports collection prices into every door of the collection', function (): void {
    $alfa = Category::factory()->create(['name' => 'Alfa']);
    $doors = Door::factory()->count(2)->create(['category_id' => $alfa->id, 'price' => 50000]);
    $other = Door::factory()->create(['category_id' => Category::factory()->create()->id, 'price' => 10000]);

    Livewire::test(ListCategories::class)
        ->mountAction('import')
        ->fillForm(['file' => UploadedFile::fake()->createWithContent('arak.csv', "Kollekció,Ár\nAlfa,72000\nNincs ilyen,1000\n")])
        ->callMountedAction();

    expect($doors->map(fn (Door $door): int => $door->refresh()->price)->all())->toBe([72000, 72000])
        ->and($other->refresh()->price)->toBe(10000);
});

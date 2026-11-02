<?php

declare(strict_types=1);

use App\Exports\CategoryPricesExport;
use App\Filament\Resources\Categories\Pages\ListCategories;
use App\Imports\CategoryPriceImport;
use App\Models\Category;
use App\Models\Door;
use App\Models\User;
use Filament\Actions\Testing\TestAction;
use Illuminate\Http\UploadedFile;
use Livewire\Livewire;
use Maatwebsite\Excel\Facades\Excel;

use function Pest\Laravel\actingAs;

it('no longer exposes the public price import page', function (string $uri): void {
    $this->get($uri)->assertNotFound();
})->with(['/category-import', '/category-proccess']);

it('exports one row per collection with its most common door price', function (): void {
    $alfa = Category::factory()->create(['name' => 'Alfa']);
    Door::factory()->count(2)->create(['category_id' => $alfa->id, 'price' => 50000]);
    Door::factory()->create(['category_id' => $alfa->id, 'price' => 60000]);
    Category::factory()->create(['name' => 'Beta']);

    $export = new CategoryPricesExport();

    expect($export->headings())->toBe(['Kollekció', 'Ár'])
        ->and($export->collection()->all())->toBe([['Alfa', 50000], ['Beta', 0]]);
});

it('downloads the price list from the admin panel', function (): void {
    Excel::fake();
    actingAs(User::factory()->create(['password' => bcrypt('password')]));

    Livewire::test(ListCategories::class)->callAction(TestAction::make('exportPrices'));

    Excel::assertDownloaded('kollekcio-arak-'.now()->format('Y-m-d').'.xlsx');
});

it('round-trips the exported file back into door prices', function (): void {
    $alfa = Category::factory()->create(['name' => 'Alfa']);
    $door = Door::factory()->create(['category_id' => $alfa->id, 'price' => 50000]);

    $path = Excel::raw(new class implements Maatwebsite\Excel\Concerns\FromArray
    {
        public function array(): array
        {
            return [['Kollekció', 'Ár'], ['Alfa', 72000], ['Nincs ilyen', 1000], ['Alfa ures', '']];
        }
    }, Maatwebsite\Excel\Excel::XLSX);
    $file = UploadedFile::fake()->createWithContent('arak.xlsx', $path);

    $import = new CategoryPriceImport();
    Excel::import($import, $file);

    expect($door->refresh()->price)->toBe(72000)
        ->and($import->updatedCollections)->toBe(1);
});

it('imports prices from the admin panel', function (): void {
    actingAs(User::factory()->create(['password' => bcrypt('password')]));
    $alfa = Category::factory()->create(['name' => 'Alfa']);
    Door::factory()->create(['category_id' => $alfa->id, 'price' => 50000]);

    $file = UploadedFile::fake()->createWithContent('arak.xlsx', Excel::raw(new class implements Maatwebsite\Excel\Concerns\FromArray
    {
        public function array(): array
        {
            return [['Kollekció', 'Ár'], ['Alfa', 64000]];
        }
    }, Maatwebsite\Excel\Excel::XLSX));

    Livewire::test(ListCategories::class)
        ->callAction(TestAction::make('importPrices'), ['file' => $file])
        ->assertHasNoFormErrors()
        ->assertNotified('1 kollekció ára frissítve.');
});

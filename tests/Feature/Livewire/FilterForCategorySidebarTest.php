<?php

declare(strict_types=1);

use App\Livewire\FilterForCategorySidebar;
use App\Models\Category;
use Livewire\Livewire;

it('renders the collections page when there are no categories', function (): void {
    $this->get(route('category.index'))->assertOk();
});

it('renders when only some of the known collection groups exist', function (): void {
    Category::factory()->create(['name' => 'Alfa', 'breadcrumb' => 'SLIDING DOORS']);

    Livewire::test(FilterForCategorySidebar::class)
        ->assertOk()
        ->assertSee('Alfa');
});

it('lists the known collection groups first and keeps groups created in the admin panel', function (): void {
    Category::factory()->create(['name' => 'Uj kollekcio', 'breadcrumb' => 'NEW GROUP']);
    Category::factory()->create(['name' => 'Tolo', 'breadcrumb' => 'SLIDING DOORS']);
    Category::factory()->create(['name' => 'Lakk', 'breadcrumb' => 'LACQUERED DOORS']);

    $collections = Livewire::test(FilterForCategorySidebar::class)->get('collections');

    expect(array_keys($collections))->toBe(['LACQUERED DOORS', 'SLIDING DOORS', 'NEW GROUP']);
});

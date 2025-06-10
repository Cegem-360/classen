<?php

declare(strict_types=1);

use App\Livewire\FeaturedSalesAreas;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(FeaturedSalesAreas::class)
        ->assertStatus(200);
});

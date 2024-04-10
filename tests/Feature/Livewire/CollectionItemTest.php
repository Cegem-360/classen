<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CollectionItem;
use Livewire\Livewire;
use Tests\TestCase;

class CollectionItemTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CollectionItem::class)
            ->assertStatus(200);
    }
}

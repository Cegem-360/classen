<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CollectionItem;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
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

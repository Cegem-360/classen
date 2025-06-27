<?php

declare(strict_types=1);

namespace Tests\Feature\Livewire;

use App\Livewire\CollectionItem;
use Livewire\Livewire;
use Tests\TestCase;

final class CollectionItemTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        $category = \App\Models\Category::factory()->create(['name' => 'test-category']);
        Livewire::test(CollectionItem::class, ['category' => $category])
            ->assertStatus(200);
    }
}

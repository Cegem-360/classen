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
        Livewire::test(CollectionItem::class)
            ->assertStatus(200);
    }
}

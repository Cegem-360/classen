<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

final class CollectionItem extends Component
{
    public Category $category;

    public function mount(Category $category): void
    {
        $this->category = $category;
    }

    public function render()
    {
        return view('livewire.collection-item', [
            'category' => $this->category,
        ]);
    }
}

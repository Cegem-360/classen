<?php

declare(strict_types=1);

namespace App\Livewire;

use Livewire\Component;

final class CollectionItem extends Component
{
    public $category;

    public function mount($category)
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

<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class FillterForCategorySidebar extends Component
{
    public $options = [];
    public $collections = [];
    public function render()
    {
        $this->collections = Category::all()->groupBy('breadcrumb')->all();
        return view('livewire.fillter-for-category-sidebar', ['collections' => $this->collections]);
    }
}

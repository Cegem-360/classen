<?php

namespace App\Livewire;

use App\Models\AdditionalAttribute;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Collection;


class FilterForCategorySidebar extends Component
{
    public $options = [
        'surface' => [
            'primo_finishing' => false,
            '3d_finishing' => false,
            'iridium_finishing' => false,
            'cpl_laminate' => false,
            'hpl_laminate' => false,
            'lacquered' => false,
        ]
    ];
    public $collections;

    public function mount()
    {
        $this->collections = Category::with('category')->all();
    }
    public function updating()
    {
    }
    public function render()
    {
        $this->collections = new Collection();

        if ($this->options['surface']['primo_finishing']) {
            $attributes = AdditionalAttribute::wherePrimoFinishing(true)->with('category')->get();
            foreach ($attributes as $attribute)
                $this->collections = $this->collections->merge($attribute->category);
        }
        if ($this->options['surface']['3d_finishing']) {
            $attributes = AdditionalAttribute::where3dFinishing(true)->with('category')->get();
            foreach ($attributes as $attribute)
                $this->collections = $this->collections->merge($attribute->category);
        }
        if ($this->options['surface']['iridium_finishing']) {
            $attributes = AdditionalAttribute::whereIridiumFinishing(true)->with('category')->get();
            foreach ($attributes as $attribute)
                $this->collections = $this->collections->merge($attribute->category);
            dd($this->collections);
        }
        $this->collections = $this->collections->groupBy('breadcrumb')->all();

        /*$this->collections->merge(
            Category::when($this->options['surface']['primo_finishing'])->whereHas('AdditionalAttribute')->get()
        );*/
        return view('livewire.filter-for-category-sidebar', ['collections' => $this->collections]);
    }
}

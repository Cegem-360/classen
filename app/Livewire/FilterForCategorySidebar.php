<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Collection;
use App\Models\AdditionalAttribute;
use Illuminate\Database\Eloquent\Builder;



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
    }
    public function updated()
    {
    }
    public function render()
    {
        if ($this->in_array_recursive(true, $this->options, true)) {
            $categories = [];
            $results =
                AdditionalAttribute::with('category')
                ->when($this->options['surface']['primo_finishing'], function (Builder $query) {
                    $query->wherePrimoFinishing(true);
                })->when($this->options['surface']['3d_finishing'], function (Builder $query) {
                    $query->where3dFinishing(true);
                })->when($this->options['surface']['iridium_finishing'], function (Builder $query) {
                    $query->whereIridiumFinishing(true);
                })->when($this->options['surface']['cpl_laminate'], function (Builder $query) {
                    $query->whereCplLaminate(true);
                })->when($this->options['surface']['hpl_laminate'], function (Builder $query) {
                    $query->whereHplLaminate(true);
                })->when($this->options['surface']['lacquered'], function (Builder $query) {
                    $query->whereLacquered(true);
                })->get();
            foreach ($results as $result) {
                $categories[] = $result->category;
            }
            $collection = collect($categories);

            $this->collections = $collection->groupBy('breadcrumb')->all();
        } else {
            $this->collections = Category::all()->groupBy('breadcrumb')->all();
        }
        /*$this->collections->merge(
            Category::when($this->options['surface']['primo_finishing'])->whereHas('AdditionalAttribute')->get()
        );*/
        return view('livewire.filter-for-category-sidebar', ['collections' => $this->collections]);
    }
    public function in_array_recursive(mixed $needle, array $haystack, bool $strict): bool
    {
        foreach ($haystack as $element) {
            if ($element === $needle) {
                return true;
            }

            $isFound = false;
            if (is_array($element)) {
                $isFound = $this->in_array_recursive($needle, $element, $strict);
            }

            if ($isFound === true) {
                return true;
            }
        }

        return false;
    }
}

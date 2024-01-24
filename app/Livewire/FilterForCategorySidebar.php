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
        ],
        'purpose' => [
            'room_door' => false,
            'bathroom_door' => false,
            'interior_entrance_door' => false,
            'technical_doors' => false,
            'anti_burglary_door' => false,
            'soundproof_door' => false,
            'sliding_door' => false,
        ],
        'style' => [
            'modern' => false,
            'classic' => false,
            'loft' => false,
            'retro' => false,
            'rustic' => false,
        ],
        'width' => [
            'width_60' => false,
            'width_70' => false,
            'width_80' => false,
            'width_90' => false,
            'width_100' => false,
            'width_110' => false,
            'width_120' => false,
        ],
        'construction' => [
            'panel_doors' => false,
            'framed_doors' => false,
        ],
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
                })->when($this->options['purpose']['room_door'], function (Builder $query) {
                    $query->whereRoomDoor(true);
                })->when($this->options['purpose']['bathroom_door'], function (Builder $query) {
                    $query->whereBathroomDoor(true);
                })->when($this->options['purpose']['interior_entrance_door'], function (Builder $query) {
                    $query->whereInteriorEntranceDoor(true);
                })->when($this->options['purpose']['technical_doors'], function (Builder $query) {
                    $query->whereTechnicalDoors(true);
                })->when($this->options['purpose']['anti_burglary_door'], function (Builder $query) {
                    $query->whereAntiBurglaryDoor(true);
                })->when($this->options['purpose']['soundproof_door'], function (Builder $query) {
                    $query->whereSoundproofDoor(true);
                })->when($this->options['purpose']['sliding_door'], function (Builder $query) {
                    $query->whereSlidingDoor(true);
                })->when($this->options['style']['modern'], function (Builder $query) {
                    $query->whereModern(true);
                })->when($this->options['style']['classic'], function (Builder $query) {
                    $query->whereClassic(true);
                })->when($this->options['style']['loft'], function (Builder $query) {
                    $query->whereLoft(true);
                })->when($this->options['style']['retro'], function (Builder $query) {
                    $query->whereRetro(true);
                })->when($this->options['style']['rustic'], function (Builder $query) {
                    $query->whereRustic(true);
                })->when($this->options['width']['width_60'], function (Builder $query) {
                    $query->where('width_60', true);
                })->when($this->options['width']['width_70'], function (Builder $query) {
                    $query->where('width_70', true);
                })->when($this->options['width']['width_80'], function (Builder $query) {
                    $query->where('width_80', true);
                })->when($this->options['width']['width_90'], function (Builder $query) {
                    $query->where('width_90', true);
                })->when($this->options['width']['width_100'], function (Builder $query) {
                    $query->where('width_100', true);
                })->when($this->options['width']['width_110'], function (Builder $query) {
                    $query->where('width_110', true);
                })->when($this->options['width']['width_120'], function (Builder $query) {
                    $query->where('width_120', true);
                })->when($this->options['construction']['panel_doors'], function (Builder $query) {
                    $query->wherePanelDoors(true);
                })->when($this->options['construction']['framed_doors'], function (Builder $query) {
                    $query->whereFramedDoors(true);
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

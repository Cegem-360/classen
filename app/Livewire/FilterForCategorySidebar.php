<?php

namespace App\Livewire;

use App\Models\AdditionalAttribute;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class FilterForCategorySidebar extends Component
{
    public $options = [
        'surface' => [
            '3d_finishing' => false,
            'iridium_finishing' => false,
            'cpl_laminate' => false,
            'hpl_laminate' => false,
            'lacquered' => false,
        ],
        'purpose' => [
            'room_door' => false,
            'inner_door' => false,
            'technical_doors' => false,
            'sliding_door' => false,
        ],
        'style' => [
            'modern' => false,
            'classic' => false,
            'loft' => false,
        ],
    ];

    public $collections;

    public function render()
    {
        if ($this->in_array_recursive(true, $this->options, true)) {
            $categories = [];
            $results =
                AdditionalAttribute::with('category')
                    ->where(function (Builder $outerQuery) {
                        $outerQuery->when($this->options['surface']['3d_finishing'], function (Builder $query) {
                            $query->orWhere('3d_finishing', true);
                        })->when($this->options['surface']['iridium_finishing'], function (Builder $query) {
                            $query->orWhere('iridium_finishing', true);
                        })->when($this->options['surface']['cpl_laminate'], function (Builder $query) {
                            $query->orWhere('cpl_laminate', true);
                        })->when($this->options['surface']['hpl_laminate'], function (Builder $query) {
                            $query->orWhere('hpl_laminate', true);
                        })->when($this->options['surface']['lacquered'], function (Builder $query) {
                            $query->orWhere('lacquered', true);
                        });
                    })
                    ->where(function (Builder $outerQuery) {
                        $outerQuery->when($this->options['purpose']['room_door'], function (Builder $query) {
                            $query->orWhere('room_door', true);
                        })->when($this->options['purpose']['inner_door'], function (Builder $query) {
                            $query->orWhere('inner_door', true);
                        })->when($this->options['purpose']['technical_doors'], function (Builder $query) {
                            $query->orWhere('technical_doors', true);
                        })->when($this->options['purpose']['sliding_door'], function (Builder $query) {
                            $query->orWhere('sliding_door', true);
                        });
                    })->where(function (Builder $outerQuery) {
                        $outerQuery->when($this->options['style']['modern'], function (Builder $query) {
                            $query->orWhere('modern', true);
                        })->when($this->options['style']['classic'], function (Builder $query) {
                            $query->orWhere('classic', true);
                        })->when($this->options['style']['loft'], function (Builder $query) {
                            $query->orWhere('loft', true);
                        });
                    })->get();
            foreach ($results as $result) {
                $categories[] = $result->category;
            }
            $collection = collect($categories);
            $this->collections = $collection->groupBy('breadcrumb')->all();
        } else {
            $this->collections = Category::all()->groupBy('breadcrumb')->all();
            $tmp['LACQUERED DOORS'] = $this->collections['LACQUERED DOORS'];
            $tmp['FRAMED DOORS'] = $this->collections['FRAMED DOORS'];
            $tmp['VENEER PANEL DOORS'] = $this->collections['VENEER PANEL DOORS'];
            $tmp['INTERIOR ENTRANCE DOORS'] = $this->collections['INTERIOR ENTRANCE DOORS'];
            $tmp['TECHNICAL AND SYSTEMS DOORS'] = $this->collections['TECHNICAL AND SYSTEMS DOORS'];
            $tmp['SLIDING DOORS'] = $this->collections['SLIDING DOORS'];
            $tmp['STORAGE PRODUCTS'] = $this->collections['STORAGE PRODUCTS'];
            $tmp['WOOD-BASED DOOR FRAMES'] = $this->collections['WOOD-BASED DOOR FRAMES'];
            $this->collections = collect($tmp)->all();
        }
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

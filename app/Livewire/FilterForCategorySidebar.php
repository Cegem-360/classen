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
            'bathroom_door' => false,
            'technical_doors' => false,
            'anti_burglary_door' => false,
            'sliding_door' => false,
        ],
        'style' => [
            'modern' => false,
            'classic' => false,
            'loft' => false,
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
                        })->when($this->options['purpose']['bathroom_door'], function (Builder $query) {
                            $query->orWhere('bathroom_door', true);
                        })->when($this->options['purpose']['technical_doors'], function (Builder $query) {
                            $query->orWhere('technical_doors', true);
                        })->when($this->options['purpose']['anti_burglary_door'], function (Builder $query) {
                            $query->orWhere('anti_burglary_door', true);
                        })->when($this->options['purpose']['sliding_door'], function (Builder $query) {
                            $query->orWhere('sliding_door', true);
                        });
                    })->where(function (Builder $outerQuery) {
                        $outerQuery->when($this->options['style']['modern'], function (Builder $query) {
                            $query->orWhereModern(true);
                        })->when($this->options['style']['classic'], function (Builder $query) {
                            $query->orWhereClassic(true);
                        })->when($this->options['style']['loft'], function (Builder $query) {
                            $query->orWhereLoft(true);
                        });
                    })->where(function (Builder $outerQuery) {
                        $outerQuery->when($this->options['width']['width_60'], function (Builder $query) {
                            $query->orWhere('width_60', true);
                        })->when($this->options['width']['width_70'], function (Builder $query) {
                            $query->orWhere('width_70', true);
                        })->when($this->options['width']['width_80'], function (Builder $query) {
                            $query->orWhere('width_80', true);
                        })->when($this->options['width']['width_90'], function (Builder $query) {
                            $query->orWhere('width_90', true);
                        })->when($this->options['width']['width_100'], function (Builder $query) {
                            $query->orWhere('width_100', true);
                        })->when($this->options['width']['width_110'], function (Builder $query) {
                            $query->orWhere('width_110', true);
                        })->when($this->options['width']['width_120'], function (Builder $query) {
                            $query->orWhere('width_120', true);
                        });
                    })->where(function (Builder $outerQuery) {
                        $outerQuery->when($this->options['construction']['panel_doors'], function (Builder $query) {
                            $query->orWhere('panel_doors', true);
                        })->when($this->options['construction']['framed_doors'], function (Builder $query) {
                            $query->orWhere('framed_doors', true);
                        });
                    })->get();
            foreach ($results as $result) {
                $categories[] = $result->category;
            }
            $collection = collect($categories);
            $this->collections = $collection->groupBy('breadcrumb')->all();
        } else {
            $this->collections = Category::all()->groupBy('breadcrumb')->all();
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

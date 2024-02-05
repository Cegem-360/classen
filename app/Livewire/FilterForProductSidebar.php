<?php

namespace App\Livewire;

use App\Models\Door;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Collection;
use App\Models\AdditionalAttribute;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;

class FilterForProductSidebar extends Component
{
    use WithPagination;
    public $colors = [
        'colour' => [
            'white' => false,
            'bright' => false,
            'grey' => false,
            'brown' => false,
            'graphite' => false,
            'dark' => false,
            'anthracite' => false,
            'black' => false,
        ],

    ];
    public $options = [
        'decor' => [
            'sonoma_oak' => false,
            'natural_oak' => false,
            'gray_oak' => false,
            'beech' => false,
            'wenge' => false,
            'walnut' => false,
            'acacia_light' => false,
        ],
        'type' => [
            'rebated_doors' => false,
            'non_rebated_doors' => false,
            'double_leaf_door' => false,
            'with_glazing' => false,
        ],

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
            'fire_doors' => false,
            'anti_burglary_door' => false,
            'soundproof_door' => false,
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
            $doors_grouped = new Collection;
            $doors =
                Door::with('category')
                    ->where(function (Builder $outerQuery) {
                        $outerQuery
                            ->when($this->options['surface']['primo_finishing'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->wherePrimoFinishing(true);
                                });
                            })
                            ->when($this->options['surface']['3d_finishing'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->where3dFinishing(true);
                                });
                            })
                            ->when($this->options['surface']['iridium_finishing'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->whereIridiumFinishing(true);
                                });
                            })
                            ->when($this->options['surface']['cpl_laminate'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->whereCplLaminate(true);
                                });
                            })
                            ->when($this->options['surface']['hpl_laminate'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->whereHplLaminate(true);
                                });
                            })
                            ->when($this->options['surface']['lacquered'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->whereLacquered(true);
                                });
                            });
                    })->where(function (Builder $outerQuery) {
                        $outerQuery
                            ->when($this->options['purpose']['room_door'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->whereRoomDoor(true);
                                });
                            })
                            ->when($this->options['purpose']['bathroom_door'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->whereBathroomDoor(true);
                                });
                            })
                            ->when($this->options['purpose']['interior_entrance_door'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->whereInteriorEntranceDoor(true);
                                });
                            })
                            ->when($this->options['purpose']['technical_doors'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->whereTechnicalDoors(true);
                                });
                            })
                            ->when($this->options['purpose']['anti_burglary_door'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->whereAntiBurglaryDoor(true);
                                });
                            })
                            ->when($this->options['purpose']['soundproof_door'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->whereSoundproofDoor(true);
                                });
                            })
                            ->when($this->options['purpose']['sliding_door'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->whereSlidingDoor(true);
                                });
                            });
                    })->where(function (Builder $outerQuery) {
                        $outerQuery
                            ->when($this->options['style']['modern'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->whereModern(true);
                                });
                            })
                            ->when($this->options['style']['classic'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->whereClassic(true);
                                });
                            })
                            ->when($this->options['style']['loft'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->whereLoft(true);
                                });
                            });
                    })->where(function (Builder $outerQuery) {
                        $outerQuery
                            ->when($this->options['width']['width_60'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->where('width_60', true);
                                });
                            })->when($this->options['width']['width_70'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->where('width_70', true);
                                });
                            })->when($this->options['width']['width_80'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->where('width_80', true);
                                });
                            })->when($this->options['width']['width_90'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->where('width_90', true);
                                });
                            })->when($this->options['width']['width_100'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->where('width_100', true);
                                });
                            })->when($this->options['width']['width_110'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->where('width_110', true);
                                });
                            })->when($this->options['width']['width_120'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->where('width_120', true);
                                });
                            });
                    })->where(function (Builder $outerQuery) {
                        $outerQuery
                            ->when($this->options['construction']['panel_doors'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->wherePanelDoors(true);
                                });
                            })
                            ->when($this->options['construction']['framed_doors'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->whereFramedDoors(true);
                                });
                            });
                    })->where(function (Builder $query) {
                        $query->when($this->options['decor']['sonoma_oak'], function (Builder $q) {
                            $q->orWhere('tag', 'sonoma-oak');
                        })->when($this->options['decor']['natural_oak'], function (Builder $q) {
                            $q->orWhere('tag', 'natural-oak');
                        })->when($this->options['decor']['gray_oak'], function (Builder $q) {
                            $q->orWhere('tag', 'gray-oak');
                        })->when($this->options['decor']['beech'], function (Builder $q) {
                            $q->orWhere('tag', 'beech');
                        })->when($this->options['decor']['wenge'], function (Builder $q) {
                            $q->orWhere('tag', 'wenge');
                        })->when($this->options['decor']['walnut'], function (Builder $q) {
                            $q->orWhere('tag', 'walnut');
                        })->when($this->options['decor']['acacia_light'], function (Builder $q) {
                            $q->orWhere('tag', 'acacia-light');
                        });
                    })->paginate(perPage: 20);

        } else {
            $doors = Door::paginate(perPage: 20)->onEachSide(2);
        }
        return view('livewire.filter-for-product-sidebar', compact('doors'));
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

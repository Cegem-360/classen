<?php

namespace App\Livewire;

use App\Models\Door;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class FilterForProductSidebar extends Component
{
    use WithoutUrlPagination,WithPagination;

    public $options = [
        'storage' => [
            'storage' => false,
        ],
        'decor' => [
            'honey_catania' => false,
            'cleveland_oak' => false,
            'uni_white' => false,
            'uni_Black' => false,
            'hamilton_oak_vertical' => false,
            'hamilton_oak_horizontal' => false,
        ],
        'type' => [
            'rebated_doors' => false,
            'non_rebated_doors' => false,
            'double_leaf_door' => false,
            'with_glazing' => false,
        ],

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
            'anti_burglary_door' => false,
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
            $doors_grouped = new Collection;
            $doors =
                Door::with('category')
                    ->where(function (Builder $outerQuery) {
                        $outerQuery
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
                            ->when($this->options['purpose']['inner_door'], function (Builder $query) {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q) {
                                    $q->whereInnerDoor(true);
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
                    })->where(function (Builder $query) {
                        $query->when($this->options['decor']['honey_catania'], function (Builder $q) {
                            $q->orWhere('tag', 'honey-catania');
                        })->when($this->options['decor']['cleveland_oak'], function (Builder $q) {
                            $q->orWhere('tag', 'cleveland-oak');
                        })->when($this->options['decor']['uni_white'], function (Builder $q) {
                            $q->orWhere('tag', 'uni-white');
                        })->when($this->options['decor']['uni_Black'], function (Builder $q) {
                            $q->orWhere('tag', 'uni-Black');
                        })->when($this->options['decor']['hamilton_oak_vertical'], function (Builder $q) {
                            $q->orWhere('tag', 'hamilton-oak-vertical');
                        })->when($this->options['decor']['hamilton_oak_horizontal'], function (Builder $q) {
                            $q->orWhere('tag', 'hamilton-oak-horizontal');
                        });
                    })->where(function (Builder $query) {
                        $query->when($this->options['storage']['storage'], function (Builder $q) {
                            $q->orWhereHas('category', function (Builder $innerQ) {
                                $innerQ->where('name', 'Raktári ajtók');
                            });
                        });
                    })
                    ->inRandomOrder()->paginate(perPage: 40);

        } else {
            $doors = Door::inRandomOrder()->paginate(perPage: 40)->onEachSide(0);
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

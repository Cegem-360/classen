<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Door;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

final class FilterForProductSidebar extends Component
{
    use WithoutUrlPagination;
    use WithPagination;
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
                    ->where(function (Builder $outerQuery): void {
                        $outerQuery
                            ->when($this->options['surface']['3d_finishing'], function (Builder $query): void {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q): void {
                                    $q->where3dFinishing(true);
                                });
                            })
                            ->when($this->options['surface']['iridium_finishing'], function (Builder $query): void {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q): void {
                                    $q->whereIridiumFinishing(true);
                                });
                            })
                            ->when($this->options['surface']['cpl_laminate'], function (Builder $query): void {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q): void {
                                    $q->whereCplLaminate(true);
                                });
                            })
                            ->when($this->options['surface']['hpl_laminate'], function (Builder $query): void {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q): void {
                                    $q->whereHplLaminate(true);
                                });
                            })
                            ->when($this->options['surface']['lacquered'], function (Builder $query): void {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q): void {
                                    $q->whereLacquered(true);
                                });
                            });
                    })->where(function (Builder $outerQuery): void {
                        $outerQuery
                            ->when($this->options['purpose']['room_door'], function (Builder $query): void {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q): void {
                                    $q->whereRoomDoor(true);
                                });
                            })
                            ->when($this->options['purpose']['inner_door'], function (Builder $query): void {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q): void {
                                    $q->whereInnerDoor(true);
                                });
                            })
                            ->when($this->options['purpose']['technical_doors'], function (Builder $query): void {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q): void {
                                    $q->whereTechnicalDoors(true);
                                });
                            })
                            ->when($this->options['purpose']['anti_burglary_door'], function (Builder $query): void {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q): void {
                                    $q->whereAntiBurglaryDoor(true);
                                });
                            })
                            ->when($this->options['purpose']['sliding_door'], function (Builder $query): void {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q): void {
                                    $q->whereSlidingDoor(true);
                                });
                            });
                    })->where(function (Builder $outerQuery): void {
                        $outerQuery
                            ->when($this->options['style']['modern'], function (Builder $query): void {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q): void {
                                    $q->whereModern(true);
                                });
                            })
                            ->when($this->options['style']['classic'], function (Builder $query): void {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q): void {
                                    $q->whereClassic(true);
                                });
                            })
                            ->when($this->options['style']['loft'], function (Builder $query): void {
                                $query->orWhereHas('category.AdditionalAttribute', function (Builder $q): void {
                                    $q->whereLoft(true);
                                });
                            });
                    })->where(function (Builder $query): void {
                        $query->when($this->options['decor']['honey_catania'], function (Builder $q): void {
                            $q->orWhere('tag', 'honey-catania');
                        })->when($this->options['decor']['cleveland_oak'], function (Builder $q): void {
                            $q->orWhere('tag', 'cleveland-oak');
                        })->when($this->options['decor']['uni_white'], function (Builder $q): void {
                            $q->orWhere('tag', 'uni-white');
                        })->when($this->options['decor']['uni_Black'], function (Builder $q): void {
                            $q->orWhere('tag', 'uni-Black');
                        })->when($this->options['decor']['hamilton_oak_vertical'], function (Builder $q): void {
                            $q->orWhere('tag', 'hamilton-oak-vertical');
                        })->when($this->options['decor']['hamilton_oak_horizontal'], function (Builder $q): void {
                            $q->orWhere('tag', 'hamilton-oak-horizontal');
                        });
                    })->where(function (Builder $query): void {
                        $query->when($this->options['storage']['storage'], function (Builder $q): void {
                            $q->orWhereHas('category', function (Builder $innerQ): void {
                                $innerQ->where('name', 'Raktári ajtók');
                            });
                        });
                    })
                    ->inRandomOrder()->paginate(perPage: 40);

        } else {
            $doors = Door::inRandomOrder()->paginate(perPage: 40);
        }

        return view('livewire.filter-for-product-sidebar', ['doors' => $doors]);
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

            if ($isFound) {
                return true;
            }
        }

        return false;
    }

    public function showDetails($id): void
    {
        $door = Door::find($id);
        $this->redirect(route('door.show', ['door' => $door]), navigate: true);
    }
}

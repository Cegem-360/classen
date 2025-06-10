<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\AdditionalAttribute;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\Url;
use Livewire\Component;

final class FilterForCategorySidebar extends Component
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
            'wood_door' => false,
            'interior_entrance_door' => false,
        ],
        'style' => [
            'modern' => false,
            'classic' => false,
            'loft' => false,
        ],
    ];

    public $collections;

    #[Url(as: 'q')]
    public string $q = '';

    #[Url(as: 'g')]
    public string $g = '';

    public function render()
    {
        if ($this->g === 'surface') {
            if ($this->q === 'lacquered') {
                $this->options['surface']['lacquered'] = ! $this->options['surface']['lacquered'];
            } elseif ($this->q === '3d_finishing') {
                $this->options['surface']['3d_finishing'] = ! $this->options['surface']['3d_finishing'];
            } elseif ($this->q === 'iridium_finishing') {
                $this->options['surface']['iridium_finishing'] = ! $this->options['surface']['iridium_finishing'];
            } elseif ($this->q === 'cpl_laminate') {
                $this->options['surface']['cpl_laminate'] = ! $this->options['surface']['cpl_laminate'];
            } elseif ($this->q === 'hpl_laminate') {
                $this->options['surface']['hpl_laminate'] = ! $this->options['surface']['hpl_laminate'];
            }
        } elseif ($this->g === 'purpose') {
            if ($this->q === 'room_door') {
                $this->options['purpose']['room_door'] = ! $this->options['purpose']['room_door'];
            } elseif ($this->q === 'inner_door') {
                $this->options['purpose']['inner_door'] = ! $this->options['purpose']['inner_door'];
            } elseif ($this->q === 'technical_doors') {
                $this->options['purpose']['technical_doors'] = ! $this->options['purpose']['technical_doors'];
            } elseif ($this->q === 'sliding_door') {
                $this->options['purpose']['sliding_door'] = ! $this->options['purpose']['sliding_door'];
            } elseif ($this->q === 'wood_door') {
                $this->options['purpose']['wood_door'] = ! $this->options['purpose']['wood_door'];
            } elseif ($this->q === 'interior_entrance_door') {
                $this->options['purpose']['interior_entrance_door'] = ! $this->options['purpose']['interior_entrance_door'];
            }
        } elseif ($this->g === 'style') {
            if ($this->q === 'modern') {
                $this->options['style']['modern'] = ! $this->options['style']['modern'];
            } elseif ($this->q === 'classic') {
                $this->options['style']['classic'] = ! $this->options['style']['classic'];
            } elseif ($this->q === 'loft') {
                $this->options['style']['loft'] = ! $this->options['style']['loft'];
            }
        }

        $this->q = '';
        $this->g = '';
        if ($this->in_array_recursive(true, $this->options, true)) {
            $categories = [];
            $results =
                AdditionalAttribute::with('category')
                    ->where(function (Builder $outerQuery): void {
                        $outerQuery->when($this->options['surface']['3d_finishing'], function (Builder $query): void {
                            $query->orWhere('3d_finishing', true);
                        })->when($this->options['surface']['iridium_finishing'], function (Builder $query): void {
                            $query->orWhere('iridium_finishing', true);
                        })->when($this->options['surface']['cpl_laminate'], function (Builder $query): void {
                            $query->orWhere('cpl_laminate', true);
                        })->when($this->options['surface']['hpl_laminate'], function (Builder $query): void {
                            $query->orWhere('hpl_laminate', true);
                        })->when($this->options['surface']['lacquered'], function (Builder $query): void {
                            $query->orWhere('lacquered', true);
                        });
                    })
                    ->where(function (Builder $outerQuery): void {
                        $outerQuery->when($this->options['purpose']['room_door'], function (Builder $query): void {
                            $query->orWhere('room_door', true);
                        })->when($this->options['purpose']['inner_door'], function (Builder $query): void {
                            $query->orWhere('inner_door', true);
                        })->when($this->options['purpose']['technical_doors'], function (Builder $query): void {
                            $query->orWhere('technical_doors', true);
                        })->when($this->options['purpose']['sliding_door'], function (Builder $query): void {
                            $query->orWhere('sliding_door', true);
                        })->when($this->options['purpose']['interior_entrance_door'], function (Builder $query): void {
                            $query->orWhere('interior_entrance_door', true);
                        })->when($this->options['purpose']['wood_door'], function (Builder $query): void {
                            $query->orWhere('wood_door', true);
                        });
                    })->where(function (Builder $outerQuery): void {
                        $outerQuery->when($this->options['style']['modern'], function (Builder $query): void {
                            $query->orWhere('modern', true);
                        })->when($this->options['style']['classic'], function (Builder $query): void {
                            $query->orWhere('classic', true);
                        })->when($this->options['style']['loft'], function (Builder $query): void {
                            $query->orWhere('loft', true);
                        });
                    })->get();
            foreach ($results as $result) {
                $categories[] = $result->category;
            }

            $collection = collect($categories);
            $this->collections = $collection->groupBy('breadcrumb')->sortBy('breadcrumb')->all();
            // dump($this->collections);
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

            if ($isFound) {
                return true;
            }
        }

        return false;
    }
}

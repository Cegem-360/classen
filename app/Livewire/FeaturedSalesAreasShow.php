<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\FeaturedSalesPage;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class FeaturedSalesAreasShow extends Component
{
    public $slug;

    public ?FeaturedSalesPage $featuredSalesPage = null;

    public function mount($slug): void
    {
        $this->slug = $slug;
        $this->featuredSalesPage = FeaturedSalesPage::where('slug', $slug)->first();
    }

    public function render(): Factory|View
    {
        return view('livewire.featured-sales-areas-show');
    }
}

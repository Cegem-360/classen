<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Quotation;
use App\Models\QuotationItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

final class DoorOptions extends Component
{
    public mixed $doors = null;

    public mixed $tags = null;

    public function mount(mixed $doors, mixed $tags): void
    {
        $this->doors = $doors;
        $this->tags = $tags;
    }

    public function addToQuotation(int $id): void
    {
        $quotation = session()->get('quotation', Quotation::query()->create([
            'session_id' => session()->getId(),
        ]));
        QuotationItem::query()->where('quotation_id', $quotation->id)->where('door_id', $id)->firstOrCreate([
            'quotation_id' => $quotation->id,
            'door_id' => $id,
        ]);
        session()->put('quotation', $quotation);
        Toaster::success(__('Sikeresen hozzáadva az árajánlathoz!'));
        $this->js('setRedNavigation()');
        // return $this->redirect(route('category.show', ['door' => $this->door]), navigate: true);
    }

    public function render(): Factory|View
    {
        return view('livewire.door-options');
    }
}

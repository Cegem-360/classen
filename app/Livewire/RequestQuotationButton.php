<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Door;
use App\Models\Quotation;
use App\Models\QuotationItem;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

final class RequestQuotationButton extends Component
{
    public Door $door;

    public function mount(Door $door): void
    {
        $this->door = $door;
    }

    public function addToQuotation(): void
    {
        $quotation = session()->get('quotation', Quotation::create([
            'session_id' => session()->getId(),
        ]));
        QuotationItem::where('quotation_id', $quotation->id)->where('door_id', $this->door->id)->firstOrCreate([
            'quotation_id' => $quotation->id,
            'door_id' => $this->door->id,
        ]);
        session()->put('quotation', $quotation);
        Toaster::success(__('Sikeresen hozzáadva az árajánlathoz!'));
        $this->js('setRedNavigation()');

    }

    public function render()
    {
        return view('livewire.request-quotation-button')->with('door', $this->door);
    }
}

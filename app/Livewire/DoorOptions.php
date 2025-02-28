<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Quotation;
use App\Models\QuotationItem;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

final class DoorOptions extends Component
{
    public $doors;

    public $tags;

    public function mount($doors, $tags)
    {
        $this->doors = $doors;
        $this->tags = $tags;
    }

    public function addToQuotation($id)
    {
        $quotation = session()->get('quotation', Quotation::create([
            'session_id' => session()->getId(),
        ]));
        QuotationItem::where('quotation_id', $quotation->id)->where('door_id', $id)->firstOrCreate([
            'quotation_id' => $quotation->id,
            'door_id' => $id,
        ]);
        session()->put('quotation', $quotation);
        Toaster::success(__('Sikeresen hozzáadva az árajánlathoz!'));
        $this->js('setRedNavigation()');
        // return $this->redirect(route('category.show', ['door' => $this->door]), navigate: true);
    }

    public function render()
    {
        return view('livewire.door-options');
    }
}

<?php

namespace App\Livewire;

use App\Models\QuotationItem;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class RemoveQuotationItem extends Component
{
    public QuotationItem $quotationItem;

    public function render()
    {
        return view('livewire.remove-quotation-item');
    }

    #[On('quotationItemDelete')]
    public function quotationItemDelete()
    {
        $this->quotationItem->delete();
        Toaster::success(__('Sikeresen eltávolítás!'));
        $this->redirect(route('quotation.index'), true);
    }

    public function mount(QuotationItem $quotationItem)
    {
        $this->quotationItem = $quotationItem;
    }
}

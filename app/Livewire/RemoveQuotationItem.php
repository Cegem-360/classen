<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\QuotationItem;
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
        Toaster::success(__('Sikeres eltávolítás!'));
        $this->redirect(route('quotation.index'));
    }

    public function mount(QuotationItem $quotationItem)
    {
        $this->quotationItem = $quotationItem;
    }
}

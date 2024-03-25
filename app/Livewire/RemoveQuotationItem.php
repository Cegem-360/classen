<?php

namespace App\Livewire;

use App\Models\QuotationItem;
use Livewire\Component;

class RemoveQuotationItem extends Component
{
    public function render()
    {
        return view('livewire.remove-quotation-item');
    }

    #[On('quotation-remove')]
    public function remove($id)
    {
        $this->quotationItem->delete();
        $this->redirect(route('quotation.index'), true);
    }

    public function mount(QuotationItem $quotationItem)
    {
        $this->quotationItem = $quotationItem;
    }
}

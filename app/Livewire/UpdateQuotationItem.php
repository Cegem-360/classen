<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\QuotationItem;
use Livewire\Attributes\On;
use Livewire\Component;

final class UpdateQuotationItem extends Component
{
    public QuotationItem $quotationItem;

    public $quantity;

    public $frame;

    #[On('quotation-increment')]
    public function increment()
    {
        $this->quantity++;
        $this->quotationItem->update([
            'quantity' => $this->quantity,
        ]);
    }

    #[On('quotation-decrement')]
    public function decrement()
    {

        if ($this->quotationItem->quantity > 1) {
            $this->quantity--;
            $this->quotationItem->update([
                'quantity' => $this->quantity,
            ]);
        }
    }

    public function mount(QuotationItem $quotationItem)
    {
        $this->quotationItem = $quotationItem;
        $this->quantity = $quotationItem->quantity;
    }

    public function updatingQuantity()
    {
        // $this->resetPage();
    }

    public function render()
    {
        $this->quotationItem->update([
            'frame' => $this->frame,
        ]);

        return view('livewire.update-quotation-item', ['quotationItem' => $this->quotationItem, 'quantity' => $this->quantity]);
    }
}

<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\QuotationItem;
use Livewire\Attributes\On;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

final class RemoveQuotationItem extends Component
{
    public QuotationItem $quotationItem;

    public function render()
    {
        return view('livewire.remove-quotation-item');
    }

    #[On('quotationItemDelete')]
    public function quotationItemDelete(): void
    {
        $this->quotationItem->delete();
        Toaster::success(__('Sikeres eltávolítás!'));
        $this->redirect(route('quotation.index'));
    }

    public function mount(QuotationItem $quotationItem): void
    {
        $this->quotationItem = $quotationItem;
    }
}

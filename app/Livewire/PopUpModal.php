<?php

declare(strict_types=1);

namespace App\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class PopUpModal extends Component
{
    public $data;

    public $show;

    protected $listeners = ['showModal' => 'showModal'];

    public function mount($data): void
    {
        $this->data = $data;
        $this->show = false;
    }

    public function showModal($data): void
    {
        $this->data = $data;

        $this->doShow();
    }

    public function doShow(): void
    {
        $this->show = true;
    }

    public function doClose(): void
    {
        $this->show = false;
    }

    public function doSomething(): void
    {
        // Do Something With Your Modal

        // Close Modal After Logic
        $this->doClose();
    }

    public function render(): Factory|View
    {

        return view('livewire.pop-up-modal');
    }
}

<?php

declare(strict_types=1);

namespace App\Livewire;

use Livewire\Component;

final class PopUpModal extends Component
{
    public $data;

    public $show;

    protected $listeners = ['showModal' => 'showModal'];

    public function mount($data)
    {
        $this->data = $data;
        $this->show = false;
    }

    public function showModal($data)
    {
        $this->data = $data;

        $this->doShow();
    }

    public function doShow()
    {
        $this->show = true;
    }

    public function doClose()
    {
        $this->show = false;
    }

    public function doSomething()
    {
        // Do Something With Your Modal

        // Close Modal After Logic
        $this->doClose();
    }

    public function render()
    {

        return view('livewire.pop-up-modal');
    }
}

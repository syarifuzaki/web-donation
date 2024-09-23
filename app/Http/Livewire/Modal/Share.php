<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;

class Share extends Component
{
    protected $listeners = ['show'];

    public $display = false;

    public function render()
    {
        return view('livewire.modal.share');
    }

    public function show()
    {
        $this->display = true;
    }

    public function hide()
    {
        $this->display = false;
    }
}

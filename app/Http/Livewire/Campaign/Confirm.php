<?php

namespace App\Http\Livewire\Campaign;

use Livewire\Component;
use Carbon\Carbon;

class Confirm extends Component
{
    public $slug;
    public $amount = '50.000';
    public $paymentMethod = 'Bank BCA';
    public $isAnonymous = false;
    public $name = null;
    public $date = null;
    public $showNote = false;
    public $note;

    public function render()
    {
        $this->date = Carbon::now()->format('Y-m-d');
        return view('livewire.campaign.confirm');
    }

    public function submit()
    {
        return redirect()->route('my-donation.instruction', ['id' => 1]);
    }

    public function toggleName()
    {
        $this->isAnonymous = !$this->isAnonymous;
    }

    public function toggleNote()
    {
        $this->showNote = !$this->showNote;
    }
}

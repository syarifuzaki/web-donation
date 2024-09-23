<?php

namespace App\Http\Livewire\Campaign;

use Livewire\Component;

class Donation extends Component
{
    public $amount = null;
    public $slug = null;
    public $disabled = true;

    public function render()
    {
      return view('livewire.campaign.donation');
    }

    public function updatedAmount()
    {
      $amount = str_replace(".", "", $this->amount);
      if (intval($amount) >= 10000) {
        $this->disabled = false;
      } else {
        $this->disabled = true;
      }
    }

    public function submit() 
    {
      return redirect()->route('campaign.payment', ['slug' => $this->slug]);
    }
}

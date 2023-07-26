<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StripeCheckout extends Component
{
    public function render()
    {
        return view('livewire.stripe-checkout');
    }
}

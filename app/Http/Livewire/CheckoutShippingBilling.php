<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CheckoutShippingBilling extends Component
{
    public $billingDifferent;

    public $businessPurchase;

    public function mount()
    {
        $this->billingDifferent = false;
        $this->businessPurchase = false;
    }

    public function render()
    {
        return view('livewire.checkout-shipping-billing');
    }
}

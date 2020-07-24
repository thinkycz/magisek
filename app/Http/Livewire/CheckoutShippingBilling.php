<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CheckoutShippingBilling extends Component
{
    public $billingDifferent;

    public $businessPurchase;

    public function mount()
    {
        $this->billingDifferent = !!old('billing_different');
        $this->businessPurchase = !!old('business_purchase');
    }

    public function render()
    {
        return view('livewire.checkout-shipping-billing');
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\DeliveryMethod;
use Livewire\Component;

class CheckoutDeliveryPayment extends Component
{
    public $deliveryMethods;

    public $selectedDelivery;

    public function mount()
    {
        $this->deliveryMethods = DeliveryMethod::where('enabled', true)->get();

        $this->selectedDelivery = $this->deliveryMethods ? $this->deliveryMethods->first()->id : null;
    }

    public function render()
    {
        return view('livewire.checkout-delivery-payment', [
            'paymentMethods' => $this->selectedDelivery ? DeliveryMethod::find($this->selectedDelivery)->paymentMethods()->where('enabled', true)->get() : []
        ]);
    }
}

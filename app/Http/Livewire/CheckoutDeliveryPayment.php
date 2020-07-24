<?php

namespace App\Http\Livewire;

use App\Models\DeliveryMethod;
use Livewire\Component;

class CheckoutDeliveryPayment extends Component
{
    public $deliveryMethods;

    public $selectedDelivery;

    public $selectedPayment;

    public function mount()
    {
        $this->deliveryMethods = DeliveryMethod::where('enabled', true)->get();

        $this->selectedDelivery = old('delivery_method_id', $this->deliveryMethods ? $this->deliveryMethods->first()->id : null);

        $this->selectedPayment = old('payment_method_id');
    }

    public function render()
    {
        return view('livewire.checkout-delivery-payment', [
            'paymentMethods' => $this->selectedDelivery ? DeliveryMethod::find($this->selectedDelivery)->paymentMethods()->where('enabled', true)->get() : []
        ]);
    }
}

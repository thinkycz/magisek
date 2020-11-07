<?php

namespace App\Http\Livewire;

use App\Models\DeliveryMethod;
use Gloudemans\Shoppingcart\CartItem;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutDeliveryPayment extends Component
{
    public $deliveryMethods;

    public $selectedDelivery;

    public $selectedPayment;

    public function mount()
    {
        $cartValueWithoutCoupons = Cart::search(fn(CartItem $cartItem) => !$cartItem->options->has('coupon'))
            ->sum(fn(CartItem $cartItem) => $cartItem->total());

        $this->deliveryMethods = DeliveryMethod::where('enabled', true)->where('mov', '<=', $cartValueWithoutCoupons)->orderByDesc('position')->get();

        $this->selectedDelivery = old('delivery_method_id', $this->deliveryMethods ? $this->deliveryMethods->first()->id : null);

        $this->selectedPayment = old('payment_method_id', $this->selectedDelivery ? optional(DeliveryMethod::find($this->selectedDelivery)->paymentMethods()->where('enabled', true)->where('mov', '<=', $cartValueWithoutCoupons)->orderByDesc('position')->first())->id : null);
    }

    public function render()
    {
        return view('livewire.checkout-delivery-payment', [
            'paymentMethods' => $this->selectedDelivery ? DeliveryMethod::find($this->selectedDelivery)->paymentMethods()->where('enabled', true)->get() : []
        ]);
    }
}

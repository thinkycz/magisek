<?php

namespace App\Http\Livewire;

use App\Models\Coupon;
use Gloudemans\Shoppingcart\CartItem;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Livewire\Component;

class ApplyCoupon extends Component
{
    public $code;

    public function updatedCode($value)
    {
        $this->code = (string)Str::of($value)->slug()->upper();
    }

    public function render()
    {
        return view('livewire.apply-coupon');
    }

    public function apply()
    {
        Validator::make(['code' => $this->code], ['code' => 'required|exists:coupons,code'])->validate();

        $coupon = Coupon::where('code', $this->code)->where('enabled', true)->first();

        if (Cart::search(fn(CartItem $cartItem) => $cartItem->options->get('coupon') === $this->code)->isNotEmpty()) {
            return;
        }

        if ($coupon->is_percentage) {
            Cart::setGlobalDiscount($coupon->value);
        }

        Cart::add($coupon, 1, ['coupon' => $this->code]);

        $this->emit('basketUpdated');

        $this->reset('code');
    }
}

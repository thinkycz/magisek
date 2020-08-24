<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\CartItem;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class BasketTable extends Component
{
    protected $listeners = ['basketUpdated' => 'render'];

    public function render()
    {
        return view('livewire.basket-table', [
            'items'    => Cart::content()->filter(fn(CartItem $cartItem) => !$cartItem->options->has('coupon')),
            'coupons'  => Cart::content()->filter(fn(CartItem $cartItem) => $cartItem->options->has('coupon')),
            'total'    => showPriceWithCurrency(Cart::total()),
            'totalNet' => showPriceWithCurrency(Cart::subtotal())
        ]);
    }
}

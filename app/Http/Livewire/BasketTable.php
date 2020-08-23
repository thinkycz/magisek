<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\CartItem;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class BasketTable extends Component
{
    protected $items;

    protected $coupons;

    public $total;

    public $totalNet;

    protected $listeners = ['basketUpdated'];

    public function mount()
    {
        $this->basketUpdated();
    }

    public function basketUpdated()
    {
        $this->items = Cart::content()->filter(fn(CartItem $cartItem) => !$cartItem->options->has('coupon'));

        $this->coupons = Cart::content()->filter(fn(CartItem $cartItem) => $cartItem->options->has('coupon'));

        $this->total = showPriceWithCurrency(Cart::total());

        $this->totalNet = showPriceWithCurrency(Cart::subtotal());
    }

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

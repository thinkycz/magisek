<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class RemoveCoupon extends Component
{
    /**
     * @var integer
     */
    public $itemId;

    public function mount($itemId)
    {
        $this->itemId = $itemId;
    }

    public function render()
    {
        return view('livewire.remove-coupon');
    }

    public function remove()
    {
        if ($this->cartItem->model->is_percentage) {
            Cart::setGlobalDiscount(0);
        }

        Cart::remove($this->itemId);

        $this->emit('basketUpdated');
    }

    public function getCartItemProperty()
    {
        return Cart::content()->has($this->itemId) ? Cart::get($this->itemId) : null;
    }
}

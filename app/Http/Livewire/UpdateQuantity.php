<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class UpdateQuantity extends Component
{
    /**
     * @var integer
     */
    public $itemId;

    /**
     * @var integer
     */
    public $quantity;

    protected $listeners = ['basketUpdated'];

    public function mount($itemId)
    {
        $this->itemId = $itemId;

        $this->basketUpdated();
    }

    public function basketUpdated()
    {
        $this->quantity = $this->cartItem ? $this->cartItem->qty : 1;
    }

    public function render()
    {
        return view('livewire.update-quantity');
    }

    public function increment()
    {
        Cart::update($this->cartItem->rowId, $this->quantity + 1);

        $this->emit('basketUpdated');
    }

    public function decrement()
    {
        Cart::update($this->cartItem->rowId, $this->quantity - 1);

        $this->emit('basketUpdated');
    }

    public function change()
    {
        Cart::update($this->cartItem->rowId, $this->quantity);

        $this->emit('basketUpdated');
    }

    public function getCartItemProperty()
    {
        return Cart::content()->has($this->itemId) ? Cart::get($this->itemId) : null;
    }
}
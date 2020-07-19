<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\CartItem;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class AddToBasket extends Component
{
    /**
     * @var Product
     */
    public $product;

    /**
     * @var integer
     */
    public $quantity;

    /**
     * @var boolean
     */
    public $purchased;

    protected $listeners = ['basketUpdated'];

    public function mount(Product $product)
    {
        $this->product = $product;

        $this->basketUpdated();
    }

    public function basketUpdated()
    {
        $cartItem = $this->getCartItem();

        $this->quantity = $cartItem ? $cartItem->qty : 1;

        $this->purchased = $cartItem ? true : false;
    }

    public function render()
    {
        return view('livewire.add-to-basket');
    }

    public function purchase()
    {
        Cart::add($this->product, 1)->setTaxRate($this->product->vatrate);

        $this->emit('basketUpdated');
    }

    public function increment()
    {
        $cartItem = $this->getCartItem();

        Cart::update($cartItem->rowId, $cartItem->qty + 1);

        $this->emit('basketUpdated');
    }

    public function decrement()
    {
        $cartItem = $this->getCartItem();

        Cart::update($cartItem->rowId, $cartItem->qty - 1);

        $this->emit('basketUpdated');
    }

    protected function getCartItem()
    {
        return Cart::search(fn(CartItem $cartItem) => $cartItem->id === $this->product->id)->first();
    }
}

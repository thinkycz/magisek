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
        $this->quantity = $this->cartItem ? $this->cartItem->qty : 1;

        $this->purchased = $this->cartItem ? true : false;
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
        return Cart::search(fn(CartItem $cartItem) => $cartItem->id === $this->product->id)->first();
    }
}

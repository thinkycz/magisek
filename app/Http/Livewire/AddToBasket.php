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

        $this->dispatchBrowserEvent('notify', 'Basket was updated');
    }

    public function render()
    {
        return view('livewire.add-to-basket');
    }

    public function purchase()
    {
        $eligibility = $this->product->checkEligibility(1);

        if ($eligibility->failed()) {
            return $this->dispatchBrowserEvent('notify', $eligibility->message());
        }

        Cart::add($this->product, 1)->setTaxRate($this->product->vatrate);

        $this->emit('basketUpdated');
    }

    public function increment()
    {
        $eligibility = $this->product->checkEligibility($this->quantity + 1);

        if ($eligibility->failed()) {
            return $this->dispatchBrowserEvent('notify', $eligibility->message());
        }

        Cart::update($this->cartItem->rowId, $this->quantity + 1);

        $this->emit('basketUpdated');
    }

    public function decrement()
    {
        $eligibility = $this->product->checkEligibility($this->quantity - 1);

        if ($eligibility->failed()) {
            return $this->dispatchBrowserEvent('notify', $eligibility->message());
        }

        Cart::update($this->cartItem->rowId, $this->quantity - 1);

        $this->emit('basketUpdated');
    }

    public function change()
    {
        $eligibility = $this->product->checkEligibility($this->quantity);

        if ($eligibility->failed()) {
            return $this->dispatchBrowserEvent('notify', $eligibility->message());
        }

        Cart::update($this->cartItem->rowId, $this->quantity);

        $this->emit('basketUpdated');
    }

    public function getCartItemProperty()
    {
        return Cart::search(fn(CartItem $cartItem) => $cartItem->id === $this->product->id)->first();
    }
}

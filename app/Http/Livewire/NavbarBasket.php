<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class NavbarBasket extends Component
{
    /**
     * @var string
     */
    public $total;

    /**
     * @var float|int
     */
    public $count;

    protected $listeners = ['basketUpdated'];

    public function mount()
    {
        $this->basketUpdated();
    }

    public function basketUpdated()
    {
        $this->total = showPriceWithCurrency(Cart::totalFloat());
        $this->count = Cart::count();
    }

    public function render()
    {
        return view('livewire.navbar-basket');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class BasketTable extends Component
{
    protected $items;

    public $total;

    public $totalNet;

    protected $listeners = ['basketUpdated'];

    public function mount()
    {
        $this->basketUpdated();
    }

    public function basketUpdated()
    {
        $this->items = Cart::content();

        $this->total = showPriceWithCurrency(Cart::total());

        $this->totalNet = showPriceWithCurrency(Cart::subtotal());
    }

    public function render()
    {
        return view('livewire.basket-table', [
            'items' => Cart::content(),
        ]);
    }
}

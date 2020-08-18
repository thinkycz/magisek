<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class OrderedItems extends Component
{
    /**
     * @var Order
     */
    public $order;

    public $adding;

    public $productName;
    public $catalog;
    public $barcode;
    public $quantity;
    public $price;

    protected $listeners = ['orderedItemsChanged' => 'render'];

    public function mount(Order $order)
    {
        $this->order = $order;
        $this->adding = false;
    }

    public function render()
    {
        return view('livewire.ordered-items', [
            'orderedItems' => $this->order->orderedItems->fresh()
        ]);
    }

    public function storeItem()
    {
        $this->order->orderedItems()->create([
            'name'     => $this->productName,
            'catalog'  => $this->catalog,
            'barcode'  => $this->barcode,
            'quantity' => $this->quantity,
            'price'    => $this->price
        ]);

        $this->emit('orderedItemsChanged');

        $this->adding = false;

        $this->reset(['productName', 'catalog', 'barcode', 'quantity', 'price']);
    }
}

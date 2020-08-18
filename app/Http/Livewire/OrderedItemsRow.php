<?php

namespace App\Http\Livewire;

use App\Models\OrderedItem;
use Livewire\Component;

class OrderedItemsRow extends Component
{
    /**
     * @var OrderedItem
     */
    public $orderedItem;

    public $editing;

    public $productName;
    public $catalog;
    public $barcode;
    public $quantity;
    public $price;

    public function mount(OrderedItem $orderedItem)
    {
        $this->orderedItem = $orderedItem;
        $this->editing = false;

        $this->productName = $orderedItem->name;
        $this->catalog = $orderedItem->catalog;
        $this->barcode = $orderedItem->barcode;
        $this->quantity = $orderedItem->quantity;
        $this->price = $orderedItem->price;
    }

    public function render()
    {
        return view('livewire.ordered-items-row');
    }

    public function editItem()
    {
        $this->editing = true;
    }

    public function updateItem()
    {
        $this->orderedItem->update([
            'name'     => $this->productName,
            'catalog'  => $this->catalog,
            'barcode'  => $this->barcode,
            'quantity' => $this->quantity,
            'price'    => $this->price
        ]);

        $this->emit('orderedItemsChanged');

        $this->editing = false;
    }

    public function removeItem()
    {
        $this->orderedItem->delete();

        $this->emit('orderedItemsChanged');
    }
}

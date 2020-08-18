<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class OrderTotalValue extends Component
{
    /**
     * @var Order
     */
    public $order;

    protected $listeners = ['orderedItemsChanged' => 'render'];

    public function mount(Order $order)
    {
        $this->order = $order;
    }

    public function render()
    {
        return view('livewire.order-total-value', [
            'total'        => $this->order->formatted_total_value,
            'totalExclVat' => $this->order->formatted_total_value_excl_vat
        ]);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class OrderNotes extends Component
{
    /**
     * @var string
     */
    public $newnote;

    /**
     * @var Order
     */
    public $order;

    public function mount(Order $order)
    {
        $this->order = $order;
    }

    public function render()
    {
        return view('livewire.order-notes', [
            'notes' => $this->order->notes()->latest()->get()
        ]);
    }

    public function addNote()
    {
        $this->order->addNote($this->newnote);

        $this->reset(['newnote']);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class OrderNotes extends Component
{
    public $note;
    public $order;

    public function mount(Order $order)
    {
        $this->order = $order;
    }

    public function render()
    {
        return view('livewire.order-notes');
    }

    public function addNote()
    {
        dd($this->order);
    }
}

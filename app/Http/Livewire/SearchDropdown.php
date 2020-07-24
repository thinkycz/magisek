<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $value;

    public function render()
    {
        return view('livewire.search-dropdown', [
            'products' => Product::take(4)->latest()->get()
        ]);
    }
}

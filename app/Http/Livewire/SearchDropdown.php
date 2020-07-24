<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $value;

    public function render()
    {
        $products = Product::take(4)->latest()->get();

        return view('livewire.search-dropdown', compact('products'));
    }
}

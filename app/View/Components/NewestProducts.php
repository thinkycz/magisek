<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;

class NewestProducts extends Component
{
    public $products;

    public function __construct()
    {
        $this->products = Product::latest()->take('6')->get();
    }

    public function render()
    {
        return view('components.newest-products');
    }
}

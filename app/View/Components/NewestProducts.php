<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;

class NewestProducts extends Component
{
    public $products;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->products = Product::latest()->take('6')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.newest-products');
    }
}

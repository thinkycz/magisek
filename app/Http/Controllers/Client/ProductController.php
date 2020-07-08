<?php

namespace App\Http\Controllers\Client;

use App\Models\Product;

class ProductController
{
    public function __invoke(Product $product)
    {
        return view('client.products.show', [
            'product' => $product
        ]);
    }
}

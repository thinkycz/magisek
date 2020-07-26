<?php

namespace App\Http\Controllers\Admin\ProductActions;

use App\Models\Product;
use Illuminate\Http\Request;

class SavePricingController
{
    public function __invoke(Product $product, Request $request)
    {
        $product->update($request->only('prices'));

        return redirect()->back()->with('message', 'Updated');
    }
}

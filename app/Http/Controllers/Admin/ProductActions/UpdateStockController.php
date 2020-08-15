<?php

namespace App\Http\Controllers\Admin\ProductActions;

use App\Models\Product;
use Illuminate\Http\Request;

class UpdateStockController
{
    public function __invoke(Product $product, Request $request)
    {
        $product->update($this->data($request));

        return redirect()->back()->with('message', __('global.updated'));
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'availability_id'      => 'required|exists:availabilities,id',
            'unit_id'              => 'required|exists:units,id',
            'quantity_in_stock'    => 'required|numeric',
            'moq'                  => 'required|numeric',
            'multiply_of_moq_only' => 'boolean'
        ]);
    }
}

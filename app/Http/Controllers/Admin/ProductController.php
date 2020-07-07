<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index', [
            'products' => Product::paginate()
        ]);
    }

    public function create()
    {
        return view('admin.products.edit', [
            'product' => Product::make()
        ]);
    }

    public function store(Request $request)
    {
        Product::create($this->data($request));

        return redirect()->route('acp.products.index');
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', [
            'product' => $product
        ]);
    }

    public function update(Product $product, Request $request)
    {
        $product->update($this->data($request));

        return redirect()->route('acp.products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('acp.products.index');
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'name'        => 'required',
            'catalog'     => 'required_without:barcode',
            'barcode'     => 'required_without:catalog',
            'description' => 'sometimes|nullable',
            'details'     => 'sometimes|nullable',
            'enabled'     => 'boolean'
        ]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DeliveryMethod;
use Illuminate\Http\Request;

class DeliveryMethodController extends Controller
{
    public function index()
    {
        return view('admin.delivery-methods.index', [
            'deliveryMethods' => DeliveryMethod::paginate()
        ]);
    }

    public function create()
    {
        return view('admin.delivery-methods.edit', [
            'deliveryMethod' => DeliveryMethod::make()
        ]);
    }

    public function store(Request $request)
    {
        DeliveryMethod::create($this->data($request));

        return redirect()->route('acp.delivery-methods.index');
    }

    public function edit(DeliveryMethod $deliveryMethod)
    {
        return view('admin.delivery-methods.edit', [
            'deliveryMethod' => $deliveryMethod
        ]);
    }

    public function update(DeliveryMethod $deliveryMethod, Request $request)
    {
        $deliveryMethod->update($this->data($request));

        return redirect()->route('acp.delivery-methods.index');
    }

    public function destroy(DeliveryMethod $deliveryMethod)
    {
        $deliveryMethod->delete();

        return redirect()->route('acp.delivery-methods.index');
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'name'                     => 'required',
            'price'                    => 'required|numeric',
            'mov'                      => 'required|numeric',
            'needs_shipping_address'   => 'boolean',
            'price_will_be_calculated' => 'boolean',
            'enabled'                  => 'boolean'
        ]);
    }
}

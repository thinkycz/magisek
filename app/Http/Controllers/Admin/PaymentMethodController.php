<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index()
    {
        return view('admin.payment-methods.index', [
            'paymentMethods' => PaymentMethod::paginate()
        ]);
    }

    public function create()
    {
        return view('admin.payment-methods.edit', [
            'paymentMethod' => PaymentMethod::make()
        ]);
    }

    public function store(Request $request)
    {
        PaymentMethod::create($this->data($request));

        return redirect()->route('acp.payment-methods.index');
    }

    public function edit(PaymentMethod $paymentMethod)
    {
        return view('admin.payment-methods.edit', [
            'paymentMethod' => $paymentMethod
        ]);
    }

    public function update(PaymentMethod $paymentMethod, Request $request)
    {
        $paymentMethod->update($this->data($request));

        return redirect()->route('acp.payment-methods.index');
    }

    public function destroy(PaymentMethod $paymentMethod)
    {
        $paymentMethod->delete();

        return redirect()->route('acp.payment-methods.index');
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'name'                     => 'required',
            'price'                    => 'required|numeric',
            'mov'                      => 'required|numeric',
            'price_will_be_calculated' => 'boolean',
            'enabled'                  => 'boolean'
        ]);
    }
}

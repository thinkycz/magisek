<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DeliveryMethod;
use App\Models\PaymentMethod;
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
            'deliveryMethod' => DeliveryMethod::make(),
            'paymentMethods' => PaymentMethod::where('enabled', true)->get()
        ]);
    }

    public function store(Request $request)
    {
        $data = collect($this->data($request));

        $deliveryMethod = DeliveryMethod::create($data->except('payment_methods')->toArray());

        $payments = collect($data['payment_methods'])->filter(fn($payment) => $payment)->keys()->toArray();

        $deliveryMethod->paymentMethods()->sync($payments);

        return redirect()->route('acp.delivery-methods.index');
    }

    public function edit(DeliveryMethod $deliveryMethod)
    {
        return view('admin.delivery-methods.edit', [
            'deliveryMethod' => $deliveryMethod,
            'paymentMethods' => PaymentMethod::where('enabled', true)->get()
        ]);
    }

    public function update(DeliveryMethod $deliveryMethod, Request $request)
    {
        $data = collect($this->data($request));

        $deliveryMethod->update($data->except('payment_methods')->toArray());

        $payments = collect($data['payment_methods'])->filter(fn($payment) => $payment)->keys()->toArray();

        $deliveryMethod->paymentMethods()->sync($payments);

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
            'enabled'                  => 'boolean',
            'payment_methods'          => 'sometimes|nullable|array'
        ]);
    }
}

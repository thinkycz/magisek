<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DeliveryMethod;
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
            'paymentMethod'   => PaymentMethod::make(),
            'deliveryMethods' => DeliveryMethod::where('enabled', true)->get()
        ]);
    }

    public function store(Request $request)
    {
        $data = collect($this->data($request));

        $paymentMethod = PaymentMethod::create($data->except('delivery_methods')->toArray());

        $deliveries = collect($data['delivery_methods'])->filter(fn($delivery) => $delivery)->keys()->toArray();

        $paymentMethod->deliveryMethods()->sync($deliveries);

        return redirect()->route('acp.payment-methods.index');
    }

    public function edit(PaymentMethod $paymentMethod)
    {
        return view('admin.payment-methods.edit', [
            'paymentMethod'   => $paymentMethod,
            'deliveryMethods' => DeliveryMethod::where('enabled', true)->get()
        ]);
    }

    public function update(PaymentMethod $paymentMethod, Request $request)
    {
        $data = collect($this->data($request));

        $paymentMethod->update($data->except('delivery_methods')->toArray());

        $deliveries = collect($data['delivery_methods'])->filter(fn($delivery) => $delivery)->keys()->toArray();

        $paymentMethod->deliveryMethods()->sync($deliveries);

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
            'position'                 => 'required|numeric',
            'price_will_be_calculated' => 'boolean',
            'enabled'                  => 'boolean',
            'delivery_methods'         => 'sometimes|nullable|array'
        ]);
    }
}

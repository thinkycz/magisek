<?php

namespace App\Http\Controllers\Client\CheckoutActions;

use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ProcessOrderController
{
    public function __invoke(Request $request)
    {
        $data = collect($this->data($request))
            ->merge($this->getBilling($request))
            ->merge(['user_id' => auth()->user()->id ?? null]);

        $order = Order::create($data->only([
            'user_id',
            'email',
            'phone',
            'customer_note',
            'delivery_method_id',
            'payment_method_id',
        ])->toArray());

        $order
            ->processShippingDetails($data)
            ->processBillingDetails($data)
            ->processDeliveryMethod()
            ->processPaymentMethod()
            ->processBasketItems();

        Cart::destroy();

        return redirect()->route('thank-you.index', [
            'order' => $order
        ]);
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'email'                 => 'required|email',
            'phone'                 => 'required|numeric',
            'notes'                 => 'sometimes|nullable',
            'shipping_company_name' => 'sometimes|nullable',
            'shipping_first_name'   => 'required',
            'shipping_last_name'    => 'required',
            'shipping_street'       => 'required',
            'shipping_city'         => 'required',
            'shipping_zipcode'      => 'required',
            'shipping_country_id'   => 'required|exists:countries,id',
            'delivery_method_id'    => 'required|exists:delivery_methods,id',
            'payment_method_id'     => 'required|exists:payment_methods,id',
            'billing_different'     => 'boolean',
            'business_purchase'     => 'boolean'
        ]);
    }

    protected function getBilling(Request $request)
    {
        return $request->get('billing_different') ? $request->validate([
            'billing_company_name' => 'sometimes|nullable',
            'billing_first_name'   => 'required',
            'billing_last_name'    => 'required',
            'billing_street'       => 'required',
            'billing_city'         => 'required',
            'billing_zipcode'      => 'required',
            'billing_country_id'   => 'required|exists:countries,id',
        ]) : collect($request->only([
            'shipping_company_name',
            'shipping_first_name',
            'shipping_last_name',
            'shipping_street',
            'shipping_city',
            'shipping_zipcode',
            'shipping_country_id'
        ]))->mapWithKeys(fn($value, $key) => [str_replace('shipping_', 'billing_', $key) => $value])->toArray();
    }
}

<?php

namespace App\Http\Controllers\Admin\OrderActions;

use App\Models\Order;
use Illuminate\Http\Request;

class UpdateDeliveryPaymentController
{
    public function __invoke(Order $order, Request $request)
    {
        $data = $this->data($request);

        $order->deliveryMethod()->associate($data['delivery_method_id'])->save();
        $order->paymentMethod()->associate($data['payment_method_id'])->save();

        return redirect()->back()->with('message', __('global.updated'));
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'delivery_method_id' => 'required|exists:delivery_methods,id',
            'payment_method_id'  => 'required|exists:payment_methods,id'
        ]);
    }
}

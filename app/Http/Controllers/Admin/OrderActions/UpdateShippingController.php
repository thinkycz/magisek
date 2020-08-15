<?php

namespace App\Http\Controllers\Admin\OrderActions;

use App\Models\Order;
use Illuminate\Http\Request;

class UpdateShippingController
{
    public function __invoke(Order $order, Request $request)
    {
        $data = $this->data($request);

        $order->shippingDetail()->update($data);

        return redirect()->back()->with('message', __('global.updated'));
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'company_name' => 'sometimes|nullable',
            'first_name'   => 'required',
            'last_name'    => 'required',
            'street'       => 'required',
            'city'         => 'required',
            'zipcode'      => 'required',
            'country_id'   => 'required|exists:countries,id',
        ]);
    }
}

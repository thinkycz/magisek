<?php

namespace App\Http\Controllers\Admin\OrderActions;

use App\Models\Order;
use Illuminate\Http\Request;

class UpdateBillingController
{
    public function __invoke(Order $order, Request $request)
    {
        $data = $this->data($request);

        $order->billingDetail()->update($data);

        return redirect()->back()->with('message', __('global.updated'));
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'company_name' => 'sometimes|nullable',
            'vat_id'       => 'sometimes|nullable',
            'company_id'   => 'required',
            'first_name'   => 'required',
            'last_name'    => 'required',
            'street'       => 'required',
            'city'         => 'required',
            'zipcode'      => 'required',
            'country_id'   => 'required|exists:countries,id',
        ]);
    }
}

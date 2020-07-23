<?php

namespace App\Http\Controllers\Client\CheckoutActions;

use Illuminate\Http\Request;

class ProcessOrderController
{
    public function __invoke(Request $request)
    {
        dd($request->all());
        
        return redirect()->route('orders.index');
    }
}

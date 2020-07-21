<?php

namespace App\Http\Controllers\Client\CheckoutActions;

class ProcessOrderController
{
    public function __invoke()
    {
        return redirect()->route('orders.index');
    }
}

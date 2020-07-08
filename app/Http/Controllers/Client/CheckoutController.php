<?php

namespace App\Http\Controllers\Client;

class CheckoutController
{
    public function __invoke()
    {
        return view('client.checkout.index');
    }
}

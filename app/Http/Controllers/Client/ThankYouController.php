<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;

class ThankYouController extends Controller
{
    public function __invoke(Order $order)
    {
        return view('client.thank-you.index', [
            'order' => $order
        ]);
    }
}

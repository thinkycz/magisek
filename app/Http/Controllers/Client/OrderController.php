<?php

namespace App\Http\Controllers\Client;

use App\Models\Order;

class OrderController
{
    public function index()
    {
        return view('client.orders.index');
    }

    public function show(Order $order)
    {
        return view('client.orders.show', [
            'order' => $order
        ]);
    }
}

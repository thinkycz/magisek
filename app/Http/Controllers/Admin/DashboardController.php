<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class DashboardController
{
    public function __invoke()
    {
        return view('admin.dashboard.index', [
            'customers_count' => User::count(),
            'products_count'  => Product::count(),
            'orders_count'    => Order::count(),
            'orders'          => Order::take(10)->latest()->get()
        ]);
    }
}

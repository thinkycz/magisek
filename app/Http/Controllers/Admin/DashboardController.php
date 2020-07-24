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
            'customers' => User::count(),
            'products'  => Product::count(),
            'orders'    => Order::count()
        ]);
    }
}

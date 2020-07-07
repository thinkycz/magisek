<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.orders.index', [
            'orders' => Order::paginate()
        ]);
    }

    public function show(Order $order)
    {
        return view('admin.orders.show', [
            'order' => $order
        ]);
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('acp.orders.index');
    }

    protected function data(Request $request)
    {
        return $request->validate([

        ]);
    }
}

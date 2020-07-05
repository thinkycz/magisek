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

    public function create()
    {
        return view('admin.orders.edit', [
            'orders' => Order::make()
        ]);
    }

    public function store(Request $request)
    {
        Order::create($this->data($request));

        return redirect()->route('acp.orders.index');
    }

    public function edit(Order $order)
    {
        return view('admin.orders.edit', [
            'order' => $order
        ]);
    }

    public function update(Order $order, Request $request)
    {
        $order->update($this->data($request));

        return redirect()->route('acp.orders.index');
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

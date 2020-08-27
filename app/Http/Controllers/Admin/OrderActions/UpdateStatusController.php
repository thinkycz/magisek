<?php

namespace App\Http\Controllers\Admin\OrderActions;

use App\Enums\Locale;
use App\Models\Order;
use App\Notifications\OrderStatusChanged;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class UpdateStatusController
{
    public function __invoke(Order $order, Request $request)
    {
        $data = $this->data($request);

        $order->status()->associate($data['status_id'])->save();

        Notification::route('mail', $order->email)->notify((new OrderStatusChanged($order))->locale(Locale::current()));

        return redirect()->back()->with('message', __('global.updated'));
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'status_id' => 'required|exists:statuses,id'
        ]);
    }
}

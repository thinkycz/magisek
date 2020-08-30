<?php

namespace App\Http\Controllers\Admin\OrderActions;

use App\Models\Order;

class GenerateInvoiceController
{
    public function __invoke(Order $order)
    {
        return view('documents.invoice', [
            'order' => $order
        ]);
    }
}

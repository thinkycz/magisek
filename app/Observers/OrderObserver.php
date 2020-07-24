<?php

namespace App\Observers;

use App\Models\Order;
use Carbon\Carbon;
use Facades\Faker\Generator as Faker;
use Illuminate\Support\Str;

class OrderObserver
{
    public function creating(Order $order)
    {
        $order->setAttribute('order_number', $this->orderNumber());
        $order->setAttribute('invoice_number', $this->invoiceNumber());
        $order->setAttribute('variable_symbol', $this->variableSymbol());
        $order->setAttribute('tax_date', Carbon::now());
        $order->setAttribute('due_date', Carbon::now()->addDays(7));
        $order->status()->associate(preferenceRepository()->getCreatedOrderStatus());
    }

    protected function datestamp()
    {
        return Carbon::now()->format('ymd');
    }

    protected function datestamprandom($prefix = null, $length = 6)
    {
        return (Str::upper($prefix) ?: '') . $this->datestamp() . Str::upper(Str::random($length));
    }

    protected function orderNumber()
    {
        do {
            $orderNumber = $this->datestamprandom('OB');
        } while (Order::whereOrderNumber($orderNumber)->exists());

        return $orderNumber;
    }

    protected function invoiceNumber()
    {
        do {
            $invoiceNumber = $this->datestamprandom('FA');
        } while (Order::whereInvoiceNumber($invoiceNumber)->exists());

        return $invoiceNumber;
    }

    protected function variableSymbol()
    {
        do {
            $variableSymbol = $this->datestamp() . Faker::randomNumber(4, true);
        } while (Order::whereVariableSymbol($variableSymbol)->exists());

        return $variableSymbol;
    }
}

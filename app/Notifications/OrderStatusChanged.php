<?php

namespace App\Notifications;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderStatusChanged extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * @var Order
     */
    protected Order $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function via()
    {
        return ['mail'];
    }

    public function toMail()
    {
        return (new MailMessage)
            ->subject(__('email.order_status_has_changed'))
            ->line(__('email.order_status_has_changed_to', ['number' => $this->order->order_number, 'status' => $this->order->status->name]))
            ->line($this->order->status->description)
            ->action(__('global.show_order'), route('orders.show', $this->order));
    }
}

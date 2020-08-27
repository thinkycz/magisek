<?php

namespace App\Notifications;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderPlaced extends Notification implements ShouldQueue
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
            ->subject(__('email.thank_you_for_your_order'))
            ->line(__('email.thank_you_for_your_order_sub'))
            ->line(__('email.we_have_received_your_order', ['orderNumber' => $this->order->order_number]))
            ->action(__('global.show_order'), route('orders.show', $this->order));
    }
}

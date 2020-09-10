<?php

namespace App\Notifications;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\SlackAttachment;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;

class OrderReceivedAdmins extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * @var Order
     */
    public Order $order;

    /**
     * Create a new notification instance.
     *
     * @param Order $order
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'slack'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject(__('global.new_received_order'))
            ->line(__('global.order_number') . ': ' . $this->order->order_number)
            ->line(__('global.customer') . ': ' . $this->order->customer_name)
            ->action(__('global.show_order'), route('acp.orders.show', $this->order));
    }

    /**
     * Get the slack representation of the notification.
     *
     * @param mixed $notifiable
     * @return SlackMessage
     */
    public function toSlack($notifiable)
    {
        return (new SlackMessage)
            ->success()
            ->content(__('global.new_received_order'))
            ->attachment(function (SlackAttachment $attachment) {
                $attachment
                    ->title(__('global.new_received_order'), route('acp.orders.show', $this->order))
                    ->fields([
                        trans('global.order_number') => $this->order->order_number,
                        trans('global.customer')    => $this->order->customer_name,
                    ]);
            });
    }
}

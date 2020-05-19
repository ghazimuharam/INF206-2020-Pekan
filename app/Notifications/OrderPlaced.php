<?php

namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\WebPush\WebPushMessage;
use NotificationChannels\WebPush\WebPushChannel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class OrderPlaced extends Notification
{

    use Queueable;

    private $nama;

    public function __construct($name){
        $this->nama = $name;
    }
    public function via($notifiable)
    {
        return [WebPushChannel::class];
    }

    public function toWebPush($notifiable, $notification)
    {
        return (new WebPushMessage)
            ->title("Order Received!")
            ->icon('/notification-icon.png')
            ->body("You received an order from $this->nama!")
            ->action('View Order', 'notification_action')
            ->vibrate([200,80,120]);
    }

}

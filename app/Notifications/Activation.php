<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Activation extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('Action Required (CAMAG)')
                    ->line('Your four year membership with the Concerned Assembly Members Association Of Ghana(CAMAG) just Expired. You are now an associate member of this organization')
                    ->line('Members who maintained their seat need to activate their membership and new members need to register again')
                    ->line('To register again, click on the Link below to register')
                    ->line(url('http://127.0.0.1:8000/website-registration'))
                    ->line('To activate your membership, click on the Link below to activate')
                    ->line(url('http://127.0.0.1:8000/activate'))
                    ->line('Thank you!!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}

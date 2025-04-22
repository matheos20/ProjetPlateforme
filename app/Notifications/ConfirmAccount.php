<?php

namespace App\Notifications;


use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ConfirmAccount extends Notification
{
    public $code;

    public function __construct($code)
    {
        $this->code = $code;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Code de confirmation')
            ->line('Votre code de confirmation est : ' . $this->code)
            ->line('Merci de valider votre inscription avec ce code.');
    }
}














//use Illuminate\Bus\Queueable;
//use Illuminate\Contracts\Queue\ShouldQueue;
//use Illuminate\Notifications\Messages\MailMessage;
//use Illuminate\Notifications\Notification;
//
//class ConfirmAccount extends Notification
//{
//    use Queueable;
//
//    /**
//     * Create a new notification instance.
//     */
//    public function __construct()
//    {
//        //
//    }
//
//    /**
//     * Get the notification's delivery channels.
//     *
//     * @return array<int, string>
//     */
//    public function via(object $notifiable): array
//    {
//        return ['mail'];
//    }
//
//    /**
//     * Get the mail representation of the notification.
//     */
//    public function toMail(object $notifiable): MailMessage
//    {
//        return (new MailMessage)
//                    ->line('The introduction to the notification.')
//                    ->action('Notification Action', url('/'))
//                    ->line('Thank you for using our application!');
//    }
//
//    /**
//     * Get the array representation of the notification.
//     *
//     * @return array<string, mixed>
//     */
//    public function toArray(object $notifiable): array
//    {
//        return [
//            //
//        ];
//    }
//}

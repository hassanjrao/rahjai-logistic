<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactUsNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $contactSubmission;
    public function __construct($contactSubmission)
    {
        $this->contactSubmission=$contactSubmission;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('New Contact Us Submission')
                    ->line('You have received a new contact us submission.')
                    ->line('Name: '.$this->contactSubmission->name)
                    ->line('Email: '.$this->contactSubmission->email)
                    ->line('Phone: '.$this->contactSubmission->phone)
                    ->line('Message: '.$this->contactSubmission->message)
                    ->action('View', route('admin.contact-submissions.index'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}

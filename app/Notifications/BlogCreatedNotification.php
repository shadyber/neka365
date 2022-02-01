<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BlogCreatedNotification extends Notification
{
    use Queueable;
    public  $blog;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($blog)
    {
        $this->blog=$blog;
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database','mail'];
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
                    ->line('New Articles are Created at neka365.')
                    ->action('Browse', url('/blog/'.$this->blog->slug))
                    ->line('Thank you for using neka365!');
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
            'message'=>'New Article is Creaed at neka365',
            'action'=>'/blog/'.$this->blog->slug,
            'detail'=>''.strip_tags($this->blog->detail),
            'title'=>''.$this->blog->title,
            'thumb'=>$this->blog->thumb,
            'photo'=>$this->blog->photo,
        ];
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class NewUserWelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('vanchai900@gmail.com', 'Bishoxp')
        ->subject('Mailtrap Confirmation')
        ->markdown('emails.welcome-email')
        ->with([
            'name' => 'New Mailtrap User',
            'link' => 'https://mailtrap.io/inboxes'
        ]);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Career6ConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $session;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $session)
    {
        $this->name = $name;
        $this->session = $session;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('user/mails/career6confirmationmail')->subject('Career Launcher 6th Confirmation');
    }
}

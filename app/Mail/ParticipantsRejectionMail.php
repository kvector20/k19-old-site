<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ParticipantsRejectionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $participant;
    public $status;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($participant, $status)
    {
        $this->participant = $participant;
        $this->status = $status;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('admin/mails/participantsrejectionmail')->subject('K’19 Feedback Mail')->name($this->participant->name);
    }
}

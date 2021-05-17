<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminResponse extends Mailable
{
    use Queueable, SerializesModels;

    public $ticket;
    public $comment;
    public $sender;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($tickets, $comment, $user)
    {
        $this->ticket = $tickets;
        $this->comment = $comment;
        $this->sender = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.AdminResponse');
    }
}

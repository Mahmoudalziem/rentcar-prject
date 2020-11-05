<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {

        $this->name = $user['name'];

        $this->email = $user['email'];

        $this->subject = $user['subject'];

        $this->message = $user['message'];

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->from($this->email)->subject('Contact Message ' . $this->subject)->view('mailer.contact')->with([
            'name' => $this->name,
            'email' => $this->email,
            'messageContent' => $this->message
        ]);
    }
}

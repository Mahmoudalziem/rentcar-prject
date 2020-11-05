<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class activeAccount extends Mailable
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

        $this->verify = $user['verify_code'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mailer/active')->
                subject('Active Account && rentcar')->with([
                    'verify' => $this->verify,
                    'name' => $this->name
                ]);
    }
}

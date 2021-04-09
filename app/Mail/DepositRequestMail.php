<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DepositRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    private $username;
    private $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username, $message)
    {
        $this->username = $username;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('notifications.deposit-request')
            ->subject('Deposit Request')
            ->with(['username' => $this->username, 'amount' => $this->message]);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DepositConfirm extends Mailable
{
    use Queueable, SerializesModels;
    
    private $username;
    private $amount;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username, $amount)
    {
        $this->username = $username;
        $this->amount = $amount;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('deposit-confirm')
            ->subject('Deposit Confirmation')
            ->with(['username' => $this->username, 'amount' => $this->amount]);
    }
}

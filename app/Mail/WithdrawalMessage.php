<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WithdrawalMessage extends Mailable
{
    use Queueable, SerializesModels;
    
    private $username;
    private $amount;
    private $amount_btc;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username, $amount, $amount_btc)
    {
        $this->username = $username;
        $this->amount = $amount;
        $this->amount_btc = $amount_btc;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('notifications.withdrawal')
            ->subject('Withdrawal Approval')
            ->with(['username' => $this->username, 'amount' => $this->amount, 'amount_btc' => $this->amount_btc]);
    }
}

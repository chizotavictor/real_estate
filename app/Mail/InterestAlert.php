<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InterestAlert extends Mailable
{
    use Queueable, SerializesModels;

    private $username;
    private $amount;
    private $plan;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username, $amount, $plan)
    {
        $this->username = $username;
        $this->amount = $amount;
        $this->plan = $plan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('interest-alert')->with(['username' => $this->username, 'amount' => $this->amount, 'plan' => $this->plan]);
    }
}

<?php

namespace App\Mail\Receiver;

use App\Models\Pair;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OnePairExpired extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Pair
     */
    public $pair;

    /**
     * Create a new message instance.
     *
     * @param Pair $pair
     * @internal param Receiver $receiver
     */
    public function __construct(Pair $pair)
    {
        $this->pair = $pair;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('One Allocated Donor (pay-time) Expired')
            ->markdown('emails.user.one-pair-expired');
    }
}

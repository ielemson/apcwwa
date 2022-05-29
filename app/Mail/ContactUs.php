<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->user = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    

        $address = 'support@hash360.com';
        $subject = 'Password Recovery';
        $name = 'APC WWA';
        return $this->markdown('emails.contact.contactUs')
        ->from($address, $name)
        ->subject($subject)
        ->with(['token' => $this->user]);
    }
}

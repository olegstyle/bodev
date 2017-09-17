<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class ContactMail
 * @package App\Mail
 *
 * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
 */
class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /** @var string */
    public $name;
    /** @var string */
    public $email;
    /** @var string */
    public $message;

    /**
     * ContactMail constructor.
     * @param string $name
     * @param string $email
     * @param string $message
     */
    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('oleh@bodev.pro')
            ->to('oleh@bodev.pro')
            ->replyTo($this->email)
            ->subject('New message from BODev.pro')
            ->view('mail.contact');
    }
}

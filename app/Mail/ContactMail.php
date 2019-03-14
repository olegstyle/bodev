<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $bodyMessage;

    public function __construct(string $name, string $email, string $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->bodyMessage = $message;
    }

    public function build(): self
    {
        return $this->from('olegstyle1@gmail.com')
            ->to('olegstyle1@gmail.com')
            ->replyTo($this->email)
            ->subject('New message from BODev.pro')
            ->view('mail.contact');
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

  
    public function __construct(public $name, public $email, public $description, public $adress)
    {
        //
    }

   
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->email, $this->name),
        subject: $this->name . ' ha inviato un messaggio da' . $this->adress,
       
        );
    }

  
    public function content(): Content
    {
        return new Content(
            view: 'Mails.ContactMail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}

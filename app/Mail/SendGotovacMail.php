<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendGotovacMail extends Mailable
{
    use SerializesModels;

    /**
     * Create a new message instance.
     */
    public $trainerName;
    public $name;
    public $lastName;
    public $email;
    public $userMessage;
    public function __construct($name, $lastName, $email,$userMessage)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->userMessage = $userMessage;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Kontakt poruka sa sajta',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.contact',
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

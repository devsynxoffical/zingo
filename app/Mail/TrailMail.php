<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TrailMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mail_data;
    /**
     * Create a new message instance.
     */
    public function __construct($mail_data)
    {
        $this->mail_data = $mail_data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New free 2-day trial request - ' . ($this->mail_data['email'] ?? ''),
            replyTo: filter_var($this->mail_data['email'] ?? '', FILTER_VALIDATE_EMAIL) ? [new \Illuminate\Mail\Mailables\Address($this->mail_data['email'], $this->mail_data['name'] ?? null)] : [],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.trail',
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

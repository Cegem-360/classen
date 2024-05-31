<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $first_name;
    public $last_name;
    public $contactEmail;
    public $phone;
    public $emailMessage;

    /**
     * Create a new message instance.
     */
    public function __construct($first_name, $last_name, $contactEmail, $phone, $emailMessage)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->contactEmail = $contactEmail;
        $this->phone = $phone;
        $this->emailMessage = $emailMessage;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: __('Contact Form'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.form.contact-form',
            with: [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'contactEmail' => $this->contactEmail,
                'phone' => $this->phone,
                'emailMessage' => $this->emailMessage,
            ]
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

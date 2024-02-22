<?php

namespace App\Mail;

use App\Models\Quotation;
use App\Models\QuotationItem;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Database\Eloquent\Collection;

class RequestQuotationSended extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public Quotation $quotation, public Collection $quotationItems)
    {
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        //TODO: Change this to the email of the company
        return new Envelope(
            from: new Address('cegem360@gmail.com', 'Cegem360'),
            subject: 'Request Quotation Sended',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.quotation.sended',
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
    public function build()
    {
        return $this->from('arcadia98@cegem360.hu')->view('mail.quotation.sended');
    }
}

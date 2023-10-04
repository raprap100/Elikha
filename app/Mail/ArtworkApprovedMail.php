<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Artworks;
use App\Models\User;

class ArtworkApprovedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $artwork;

    /**
     * Create a new message instance.
     */
    public function __construct(Artworks $artwork)
    {
        $this->artwork = $artwork;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Artwork Approved ',
        );
    }
    public function build()
{
    return $this->subject('Artwork Approved')
        ->markdown('emails.approvedartwork');
}

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.approvedartwork',
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

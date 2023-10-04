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


class ArtworkRejectedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $artwork;
    public $remarks;

    /**
     * Create a new message instance.
     */
    public function __construct($remarks, Artworks $artwork,)
    {
        $this->artwork = $artwork;
        $this->remarks = $remarks;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Artwork Rejected'
        );
    }
    public function build()
{
    return $this->subject('Artwork Rejected')
        ->markdown('emails.rejectedartwork')
        ->with(['remarks' => $this->remarks]);
}


    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.rejectedartwork'
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


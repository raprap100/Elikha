<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Verify;
use App\Models\User;

class ArtistApproved extends Mailable
{
    use Queueable, SerializesModels;

    public $artist;

    /**
     * Create a new message instance.
     */
    public function __construct(Verify $artist,)
    {
        $this->artist = $artist;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Verified'
        );
    }
    public function build()
{
    return $this->subject('Account Verification')
        ->markdown('emails.approvedartist');
}


    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.approvedartist'
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

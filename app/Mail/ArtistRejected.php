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

class ArtistRejected extends Mailable
{
    use Queueable, SerializesModels;

    public $artist;
    public $remarks;

    /**
     * Create a new message instance.
     */
    public function __construct($remarks, Verify $artist,)
    {
        $this->artist = $artist;
        $this->remarks = $remarks;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Account Verification'
        );
    }
    public function build()
{
    return $this->subject('Account Verification')
        ->markdown('emails.rejectedartist');
}


    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.rejectedartist'
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

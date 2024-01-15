<?php

namespace App\Mail;

use App\Http\Requests\ContactRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CommentSent extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    private $request;

    public function __construct(ContactRequest $request)
    {
        $this->request = $request;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->request->subject,
            from:$this->request->email,
            to:env('MAIL_RECIPIENT')
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.comment',
            with:[
                'subject' => $this->request->subject,
                'content' => $this->request->comment
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

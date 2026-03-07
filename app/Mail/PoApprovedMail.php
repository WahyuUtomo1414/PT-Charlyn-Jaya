<?php

namespace App\Mail;

use App\Models\Po;
use App\Models\Perusahaan;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PoApprovedMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $po;
    public $perusahaan;

    /**
     * Create a new message instance.
     */
    public function __construct(Po $po)
    {
        $this->po = $po;
        $this->perusahaan = Perusahaan::query()
            ->orderBy('id')
            ->first(['nama', 'alamat', 'email', 'no_wa', 'logo']);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Purchase Order Approved - ' . $this->po->no_po,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.po-approved',
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

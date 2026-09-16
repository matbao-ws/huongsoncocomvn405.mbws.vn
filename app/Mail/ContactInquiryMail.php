<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactInquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public array $inquiry)
    {
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $senderName = $this->inquiry['name'] ?? 'Khách hàng';
        $phone = $this->inquiry['phone'] ?? '';
        $subject = '[Hương Sơn] Yêu cầu báo giá / tư vấn mới từ: ' . $senderName . ($phone ? " ({$phone})" : '');

        $ccConfig = config('mail.seller_cc', 'thuannc72@gmail.com');
        $ccList = !empty($ccConfig) ? array_filter(array_map('trim', explode(',', (string) $ccConfig))) : [];

        $replyTo = [];
        if (!empty($this->inquiry['email']) && filter_var($this->inquiry['email'], FILTER_VALIDATE_EMAIL)) {
            $replyTo[] = new \Illuminate\Mail\Mailables\Address($this->inquiry['email'], $senderName);
        }

        return new Envelope(
            subject: $subject,
            cc: $ccList,
            replyTo: $replyTo,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-inquiry',
            with: [
                'siteBranding' => app(\App\Services\SiteBranding::class)->current(),
                'inquiry' => $this->inquiry,
            ],
        );
    }
}

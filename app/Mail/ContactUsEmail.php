<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactUsEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;
    /**
     * Create a new message instance.
     */
    public function __construct(array $formData)
    {
        $this->formData = $formData;
    }


    public function build()
    {
        return $this->view('email.contact_email')
                    ->subject('Action Required CAMAG')
                    ->with([
                        'mail_name' => $this->formData['mail_name'],
                        'mail_email' => $this->formData['mail_email'],
                        'mail_head' => $this->formData['mail_head'],
                        'mail_body' => $this->formData['mail_body'],
                    ]);
    }


    /**
     * Get the message envelope.
     */


    /**
     * Get the message content definition.
     */


    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */

}

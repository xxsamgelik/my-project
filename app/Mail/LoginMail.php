<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Jenssegers\Agent\Agent;

class LoginMail extends Mailable
{

    use Queueable, SerializesModels;
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Login',
        );
    }
    public function content(): Content
    {
        $agent = new Agent();
        return new Content(
            view: 'email.new_login',
            with: [
                "user"=> $this->user,
                "agent" => $agent,
            ]
        );
    }
    public function attachments(): array
    {
        return [];
    }

}

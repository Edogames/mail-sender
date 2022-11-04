<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class toUser extends Mailable
{
    use Queueable, SerializesModels;

    public $link;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($link, $subject)
    {
        $this->link = $link;
        $this->subject = $subject;
    }

    /**
     * Get the attachments for the message.
     *
     * @return $this
     */
    public function build(){
        return $this->from("projectmuzrikgames@gmail.com", "Edgar")->subject($this->subject)->view('toUser')->with('link', $this->link);
    }
}

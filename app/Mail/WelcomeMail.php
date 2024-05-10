<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $username;
    public $imagePath;
    public $buttonUrl;
    public $buttonText;


    /**
     * Create a new message instance.
     *
     * @param string $username
     * @param string $imagePath
     * @return void
     */
    public function __construct($username, $imagePath)
    {
        $this->username = $username;
        $this->imagePath = $imagePath;
        $this->buttonUrl = "https://www.iterwriters.com";
        $this->buttonText = "Order your Pizza";

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Welcome to the Pizza House.')
                    ->view('emails.welcome');
    }
}

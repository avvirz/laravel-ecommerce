<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable {
    use Queueable, SerializesModels;
    // public $table = 'email_log';
    /**
    * Create a new message instance.
    *
    * @return void
    */

    public function __construct() {
        //
    }

    /**
    * Build the message.
    *
    * @return $this
    */

    public function build() {
        // $email = Newsletter::where( 'email' )->get();
        return $this->markdown( 'emails.welcome' );
    }
}
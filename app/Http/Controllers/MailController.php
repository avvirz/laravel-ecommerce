<?php

namespace App\Http\Controllers;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller {

    public function sendMail() {
        
        $emails = Newsletter::select( 'email' )->get();
        Mail::to( $emails )->send( new WelcomeMail() );
        return redirect()->back()->with( 'msg', 'Email sent successfully' ) ;
    }
}
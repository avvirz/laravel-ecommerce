<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Mail\WelcomeMail;
use App\Mail\OfferMail;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $email = Newsletter::paginate(5);
        return view('pages.admin.email', compact('email'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
    }
    public function sendMail(Request $request)
    {
        $email = Newsletter::get();
        Mail::to($email)->send(new OfferMail());
        return redirect('/offer')->with('msg','Offer Mail send!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);
        $data = array(
            'email' => $request->email,
        );
        Mail::to($data)->send(new WelcomeMail());

        $create = Newsletter::create($data);
        return redirect('/')->with('msg', 'Thanks for subscribing!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */

    public function show(Newsletter $newsletter)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */

    public function edit(Newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Newsletter $newsletter)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */

    public function destroy(Newsletter $newsletter)
    {
        //
    }
}

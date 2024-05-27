<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\CommentSent;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * returns the contact view
     * @return View
     */
    public function showContactPage():View{
        return view('contact');
    }

    /**
     * @return Response
     */

    public function sendMessage(ContactRequest $request){
        Mail::to(env('MAIL_RECIPIENT'))->send(new CommentSent($request));
        return back()->with('success', "Votre message a été envoyé");
    }
}

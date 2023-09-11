<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * returns the contact view
     * @return View
     */
    public function showContactPage():View{
        return view('contact');
    }
}

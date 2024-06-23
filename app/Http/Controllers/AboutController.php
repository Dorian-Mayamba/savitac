<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function about(): \Illuminate\View\View{
        return view('about');
    }
}

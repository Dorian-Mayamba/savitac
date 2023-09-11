<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application landing page
     *
     * @return View
     */
    public function index():View
    {
        return view('index');
    }
}

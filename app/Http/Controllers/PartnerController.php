<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Shows the partners page
     * @return View
     */
    public function showPartnerPage():View {
        return view('partners');
    }
}

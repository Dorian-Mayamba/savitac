<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Shows the Services page
     * @return View
     */
    public function showFormationPage():View{
        return view('formations');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function showMissionPage():View{
        return view('missions');
    }
}

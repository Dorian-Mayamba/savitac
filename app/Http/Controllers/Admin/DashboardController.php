<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * renders the dashboard page
     * @return View $view
     */
    public function showDashboardPage():View{
        $admins = User::where('role_id', '=', 1)->get();
        $partners = Partner::all();
        return view('admin.dashboard',
            [
                'admins' => $admins,
                'partners' => $partners
            ]
        );
    }
}

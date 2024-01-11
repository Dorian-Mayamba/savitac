<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Shows the partners page
     * @return View
     */
    public function showPartnerPage():View {
        $partners = Partner::all();
        return view('partners', [
            'partners' => $partners
        ]);
    }

    /**
     * returns a json representation of the partners data
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPartners(): \Illuminate\Http\JsonResponse{
        $partners = Partner::all();
        return response()->json($partners);
    }
}

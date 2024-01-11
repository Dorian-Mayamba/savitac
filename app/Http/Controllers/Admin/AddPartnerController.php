<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddPartnerRequest;
use App\Models\Partner;
use Illuminate\Support\Facades\Storage;

class AddPartnerController extends Controller
{

    public function showAddPartnerForm()
    {
        return view('admin.addPartner');
    }

    public function addPartner(AddPartnerRequest $request){
        $path = Storage::putFileAs('public', $request->file('image'), $request->file('image')->getClientOriginalName());
        $data = explode('/', $path);
        $new_partner = Partner::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => '/storage/'.$data[count($data) - 1],
            'link' => $request->link
        ]);

        $request->session()->flash('success', "the partner $new_partner->name has been added");
        return redirect()->route('dashboard');
    }
}

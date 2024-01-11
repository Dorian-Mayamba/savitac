<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class DeletePartnerController extends Controller
{
    /**
     * delete a partner based on its id
     * @param int $id
     */
    public function deletePartnerRequest(int $id){
        Partner::find($id)->delete();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditPartnerRequest;
use Illuminate\Http\Request;

class EditPartnerController extends Controller
{
    /**
     * Edit a partner based on its id
     * @param int $id
     * @param EditPartnerRequest $request
     */
    public function editPartner(int $id, EditPartnerRequest $request){
        //ToDo implement edit function
    }
}

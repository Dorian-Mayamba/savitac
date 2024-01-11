<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPartnerRequest extends AddPartnerRequest
{
    public function rules(): array
    {
        $rules = parent::rules();
        unset($rules['image']);
        return $rules;
    }
}

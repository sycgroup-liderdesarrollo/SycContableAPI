<?php

namespace App\Http\Requests\Covenant;

use Illuminate\Foundation\Http\FormRequest;

class CreateCovenantRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required|string|unique:covenants,name',
            'value'=>'integer|nullable',
            'image'=>'string',
            'covenant_type_id'=>'exists:App\Models\CovenantType,id|required|integer',
            'periodicity_type_id'=>'exists:App\Models\PeriodicityType,id|required|integer',
            'provider_id'=>'exists:App\Models\Provider,id|required|integer',
            'concept_name'=>'required|string|min:3'
        ];
    }
}

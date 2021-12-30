<?php

namespace App\Http\Requests\Covenant;

use Illuminate\Foundation\Http\FormRequest;

class CreateCovenantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|string|unique:covenants,name',
            'active'=>'boolean',
            'value'=>'required|integer',
            'covenant_type_id'=>'required|integer',
            'periodicity_type_id'=>'required|integer',
            'concept_name'=>'required|string|min:3'
        ];
    }
}

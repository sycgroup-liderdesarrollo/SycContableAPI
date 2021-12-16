<?php

namespace App\Http\Requests\Covenant;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCovenantRequest extends FormRequest
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
            'name'=>'unique:covenants,name|string',
            'active'=>'boolean',
            'value'=>'integer',
            'covenant_type_id'=>'integer',
            'periodicity_type_id'=>'integer',
            'concept_id'=>'integer'
        ];
    }
}

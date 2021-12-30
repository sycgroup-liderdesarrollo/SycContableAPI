<?php

namespace App\Http\Requests\Concept;

use Illuminate\Foundation\Http\FormRequest;

class CreateConceptRequest extends FormRequest
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
            'name'=>'name|required|string|min:5|unique:concepts,name',
            'calculated'=>'boolean|required',
            'concept_type_id'=>'integer|required'
        ];
    }
}

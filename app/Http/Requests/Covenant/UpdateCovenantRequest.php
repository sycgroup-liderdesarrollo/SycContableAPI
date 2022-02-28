<?php

namespace App\Http\Requests\Covenant;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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

    //'name'=>'unique:covenants,name|string',
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>[
            'string',
                Rule::unique('covenants', 'name')->ignore($this->covenant)
            ],
            'active'=>'boolean',
            'value',
            'image'=>'string',
            'covenant_type_id'=>'exists:App\Models\CovenantType,id|integer',
            'periodicity_type_id'=>'exists:App\Models\PeriodicityType,id|integer',
            'provider_id'=>'exists:App\Models\Provider,id|integer',
            'concept_name'=>'string|min:3'
        ];
    }
}

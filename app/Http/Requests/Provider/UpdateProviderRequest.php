<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProviderRequest extends FormRequest
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
            'name' => [
                'string',
                Rule::unique('providers','name')->ignore($this->provider)
            ],
            'last_name',
            'trade_name' => [
                'string',
                Rule::unique('providers','trade_name')->ignore($this->provider)
            ],
            'address' => 'string|min:5',
            'phone' => 'string|min:5',
            'identification_number' => [
                'string',
                Rule::unique('providers','identification_number')->ignore($this->provider)
            ],
            'identification_type_id' => 'integer',
            'iva'=>'boolean',
            'email'=>[
                'email',
                Rule::unique('providers','email')->ignore($this->provider)
            ],
            'password'=>'string',
            'constitution_type_id' => 'integer',
            'city_id' => 'integer',
            'responsability_type_id',
        ];
    }
}

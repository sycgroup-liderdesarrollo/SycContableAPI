<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

class CreateProviderRequest extends FormRequest
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
            'name' => 'string|required|min:5|unique:providers,name',
            'address' => 'string|required|min:5',
            'phone' => 'string|required|min:5',
            'identification_number' => 'string|required|min:5|unique:providers,identification_number',
            'identification_type_id' => 'required|integer'
        ];
    }
}

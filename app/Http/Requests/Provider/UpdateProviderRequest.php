<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

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
            'name' => 'string|max:10|unique:providers,name',
            'address' => 'string|min:5',
            'phone' => 'string|min:5',
            'identification_number' => 'string|min:5|unique:providers,identification_number',
            'identification_type_id' => 'integer'
        ];
    }
}

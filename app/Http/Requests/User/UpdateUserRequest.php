<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
            'name'=>'string|min:5',
            'last_name'=>'string|min:5',
            'second_last_name' => 'string',

            'identification_number'=>[
                'string',
                Rule::unique('users','identification_number')->ignore($this->user),
            ],

            'email'=>[
                'email',
                Rule::unique('users','email')->ignore($this->user),
            ],

            'password'=>'string',
            'active'=>'boolean',
            'admission_date'=>'date',
            'out_date'=>'date|nullable',

            'base_salary'=>'integer',
            'position_id'=>'integer',
            'contract_type_id'=> 'integer',
            'salary_type_id'=> 'integer',
            'headquarter_id'=> 'integer',
            'identification_type_id'=> 'integer'
        ];
    }
}

<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name'=>'required|string|min:5',
            'last_name'=>'required|string|min:5',
            'second_last_name' => 'string',
            'identification_number'=>'required|unique:users,identification_number|string',

            'email'=>'required|email|unique:users,email',
            'password'=>'required|string',

            'admission_date'=>'date',
            'out_date'=>'date',

            'base_salary'=>'integer',
            'position_id'=>'integer',
            'business_line_id' => 'integer',
            'contract_type_id'=> 'integer',
            'salary_type_id'=> 'integer',
            'headquarter_id'=> 'integer',
            'identification_type_id'=> 'integer',
        ];
    }
}

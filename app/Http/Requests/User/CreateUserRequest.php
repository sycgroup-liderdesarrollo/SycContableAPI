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

            'admission_date'=>'required|date',
            'out_date'=>'date',
            'address'=>'required|string',
            'neighborhood'=>'required|string',
            'birthday'=>'required|string',
            'children'=>'required|string',

            'base_salary'=>'required|integer',
            'position_id'=>'required|integer',
            'contract_type_id'=> 'required|integer',
            'salary_type_id'=> 'required|integer',
            'headquarter_id'=> 'required|integer',
            'identification_type_id'=> 'required|integer',
            'gender_id'=> 'required|integer',
            'health_provider_id'=> 'required|integer',
            'pension_fund_id'=> 'required|integer',
            'civil_statu_id'=> 'required|integer',
            'work_city_id'=> 'required|integer',
            'residence_city_id'=> 'required|integer',
            'expedition_place_id'=> 'required|integer',
            'strata_id'=> 'required|integer',
            'education_level_id'=> 'required|integer',
            'active'=> 'required|integer',
            'emergency_contact_id'=> 'required|integer',
        ];
    }
}

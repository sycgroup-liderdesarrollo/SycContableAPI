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
            'admission_date'=>'date',
            'out_date'=>'date',
            'address'=>'string',
            'neighborhood'=>'string',
            'birthday'=>'string',
            'children'=>'integer',
            'phone'=>'integer',

            'base_salary'=>'integer',
            'position_id'=>'integer',
            'contract_type_id'=> 'integer',
            'salary_type_id'=> 'integer',
            'headquarter_id'=> 'integer',
            'identification_type_id'=> 'integer',
            'gender_id'=> 'integer',
            'health_provider_id'=> 'integer',
            'pension_fund_id'=> 'integer',
            'civil_statu_id'=> 'integer',
            'work_city_id'=> 'integer',
            'residence_city_id'=> 'integer',
            'expedition_place_id'=> 'integer',
            'strata_id'=> 'integer',
            'education_level_id'=> 'integer',
            'active'=> 'integer',
            'emergency_contact_id'=> 'integer',

        ];
    }
}

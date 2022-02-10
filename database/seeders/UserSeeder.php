<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name'=>'Michael',
            'last_name'=>'Moncada',
            'second_last_name'=>'Castro',
            'identification_number'=>'1088355971',
            'admission_date'=>today(),
            'base_salary'=>'1000000',
            'email'=>'lider.desarrollo@sycgroup.co',
            'password'=>Hash::make('12345678'),
            'address'=>'Direccion',
            'neighborhood'=>'barrio',
            'birthday'=> today(),
            'phone'=>3113012633,
            'children'=>0,
            'position_id'=>1,
            'contract_type_id'=>1,
            'salary_type_id'=>1,
            'headquarter_id'=>1,
            'identification_type_id'=>1,
            'gender_id'=>1,
            'health_provider_id'=>1,
            'pension_fund_id'=>1,
            'civil_statu_id'=>1,
            'work_city_id'=>1,
            'residence_city_id'=>1,
            'expedition_place_id'=>1,
            'strata_id'=>4,
            'education_level_id'=>3,
            'emergency_contact_id'=>1,
            'occupational_risk_manager_id'=>1,
        ]);
        User::create([
            'name'=>'Jhonatan',
            'last_name'=>'Gamboa',
            'second_last_name'=>'Velandia',
            'identification_number'=>'1232599679',
            'admission_date'=>today(),
            'base_salary'=>'1200000',
            'email'=>'jhntngmb@sycgroup.co',
            'password'=>Hash::make('12345678'),
            'address'=>'Direccion',
            'neighborhood'=>'barrio',
            'birthday'=> today(),
            'phone'=>3113012618,
            'children'=>0,
            'position_id'=>1,
            'contract_type_id'=>1,
            'salary_type_id'=>1,
            'headquarter_id'=>1,
            'identification_type_id'=>1,
            'gender_id'=>1,
            'health_provider_id'=>1,
            'pension_fund_id'=>1,
            'civil_statu_id'=>1,
            'work_city_id'=>1,
            'residence_city_id'=>1,
            'expedition_place_id'=>1,
            'strata_id'=>4,
            'education_level_id'=>3,
            'emergency_contact_id'=>1,
            'occupational_risk_manager_id'=>1,
        ]);
    }
}

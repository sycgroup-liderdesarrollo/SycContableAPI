<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name'=>'Michael','last_name'=>'Moncada','second_last_name'=>'Castro','identification_number'=>'1088355971','admission_date'=>today(),'base_salary'=>'1000000','email'=>'lider.desarrollo@sycgroup.co','password'=>Hash::make('12345678'),'position_id'=>1,'business_line_id'=>1,'contract_type_id'=>1,'salary_type_id'=>1,'headquarter_id'=>1,'identification_type_id'=>1]);
    }
}

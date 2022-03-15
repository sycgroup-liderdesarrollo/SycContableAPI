<?php

namespace Database\Seeders;

use App\Models\Provider;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProviderSeeder extends Seeder
{
    public function run()
    {
        DB::table('providers')->insert([
            'name'=>'Jhonatan',
            'last_name'=>'Gamboa',
            'trade_name'=>'Jhonata SAS',
            'address'=>'calle 13',
            'phone'=>3113012618,
            'identification_number'=>1232599679,
            'identification_type_id'=>2,
            'iva'=>1,
            'status'=>true,
            'email'=>'jhonatan@gmail.com',
            'password'=>Hash::make('12345678'),
            'constitution_type_id'=>2,
            'city_id'=>1,
            'responsability_type_id'=>1
        ]);
    }
}

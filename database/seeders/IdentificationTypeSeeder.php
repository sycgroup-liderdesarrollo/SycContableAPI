<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdentificationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('identification_types')->insert(['name'=>'Cedula de ciudadanía']);
        DB::table('identification_types')->insert(['name'=>'NIT']);
        DB::table('identification_types')->insert(['name'=>'Cedula de extranjería']);
        DB::table('identification_types')->insert(['name'=>'Tarjeta de extranjería']);
        DB::table('identification_types')->insert(['name'=>'Registro civil']);

    }
}

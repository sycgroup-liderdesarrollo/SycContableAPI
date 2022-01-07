<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert(['name'=>'Salario minimo','value'=>'908526']);
        DB::table('settings')->insert(['name'=>'Auxilio de transporte','value'=>'106454']);
        DB::table('settings')->insert(['name'=>'Porcentaje salud','value'=>'4']);
        DB::table('settings')->insert(['name'=>'Porcentaje pension','value'=>'4']);
    }
}

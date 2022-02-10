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
        DB::table('settings')->insert(['name'=>'Aporte pension y salud','value'=>'0.12']);
        DB::table('settings')->insert(['name'=>'Aportes a riesgos laborales','value'=>'0.00522']);
        DB::table('settings')->insert(['name'=>'Cajas de compensación','value'=>'0.04']);
        DB::table('settings')->insert(['name'=>'Prima y cesantia','value'=>'0.0833']);
        DB::table('settings')->insert(['name'=>'Intereses sobre cesantias','value'=>'0.12']);
        DB::table('settings')->insert(['name'=>'Provision de vacaciones','value'=>'0.0417']);
    }
}

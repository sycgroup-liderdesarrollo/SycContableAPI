<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert(['name'=>'Gerente']);
        DB::table('positions')->insert(['name'=>'Lider']);
        DB::table('positions')->insert(['name'=>'Auxiliar']);
        DB::table('positions')->insert(['name'=>'Aprendiz']);
    }
}

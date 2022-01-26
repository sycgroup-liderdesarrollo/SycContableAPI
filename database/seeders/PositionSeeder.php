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
        DB::table('positions')->insert(['name'=>'Gerente', 'business_line_id'=>1]);
        DB::table('positions')->insert(['name'=>'Lider', 'business_line_id'=>1]);
        DB::table('positions')->insert(['name'=>'Manager', 'business_line_id'=>2]);
        DB::table('positions')->insert(['name'=>'Modelo', 'business_line_id'=>2]);
    }
}

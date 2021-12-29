<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeadquarterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headquarters')->insert(['name'=>'Pereira']);
        DB::table('headquarters')->insert(['name'=>'Manizales']);
        DB::table('headquarters')->insert(['name'=>'Medellin']);
        DB::table('headquarters')->insert(['name'=>'Dosquebradas']);
        DB::table('headquarters')->insert(['name'=>'Bogota']);
    }
}

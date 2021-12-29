<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('business_lines')->insert(['name'=>'SyC Group']);
        DB::table('business_lines')->insert(['name'=>'Lefemme']);
        DB::table('business_lines')->insert(['name'=>'Xisfo']);
        DB::table('business_lines')->insert(['name'=>'LS Building']);
    }
}

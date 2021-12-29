<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalaryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salary_types')->insert(['name'=>'Fijo']);
        DB::table('salary_types')->insert(['name'=>'Variable']);
        DB::table('salary_types')->insert(['name'=>'Integral']);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodicityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periodicity_types')->insert(['name'=>'Quincenal']);
        DB::table('periodicity_types')->insert(['name'=>'Mensual']);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CovenantTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('covenant_types')->insert(['name'=>'Cuota']);
        DB::table('covenant_types')->insert(['name'=>'Permanente']);

    }
}

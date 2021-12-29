<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConceptTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('concept_types')->insert(['name'=>'Devengado']);
        DB::table('concept_types')->insert(['name'=>'Deduccion']);
    }
}

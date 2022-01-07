<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConceptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('concepts')->insert(['name'=>'Salario basico', 'calculated'=>false, 'concept_type_id'=>1, 'setting_id'=>1]);
        DB::table('concepts')->insert(['name'=>'Auxilio de transporte', 'calculated'=>false, 'concept_type_id'=>1, 'setting_id'=>2]);
        DB::table('concepts')->insert(['name'=>'Aporte EPS', 'calculated'=>false, 'concept_type_id'=>2, 'setting_id'=>3]);
        DB::table('concepts')->insert(['name'=>'Aporte AFP', 'calculated'=>false, 'concept_type_id'=>2, 'setting_id'=>4]);
    }
}

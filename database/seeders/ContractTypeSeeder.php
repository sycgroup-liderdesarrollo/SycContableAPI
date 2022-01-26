<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContractTypeSeeder extends Seeder
{
    public function run()
    {
        DB::table('contract_types')->insert(['name'=>'Indefinido']);
        DB::table('contract_types')->insert(['name'=>'Obra o labor']);
        DB::table('contract_types')->insert(['name'=>'Prestacion de servicios']);
        DB::table('contract_types')->insert(['name'=>'Aprendizaje']);
    }
}

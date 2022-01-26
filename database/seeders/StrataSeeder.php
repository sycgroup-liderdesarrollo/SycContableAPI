<?php

namespace Database\Seeders;

use App\Models\Strata;
use Illuminate\Database\Seeder;

class StrataSeeder extends Seeder
{
    public function run()
    {
        Strata::create(['name'=>'Estato 1']);
        Strata::create(['name'=>'Estato 2']);
        Strata::create(['name'=>'Estato 3']);
        Strata::create(['name'=>'Estato 4']);
        Strata::create(['name'=>'Estato 5']);
        Strata::create(['name'=>'Estato 6']);
    }
}

<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{

    public function run()
    {
        City::create(['name'=>'Pereira']);
        City::create(['name'=>'Dosquebradas']);
    }
}

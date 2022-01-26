<?php

namespace Database\Seeders;

use App\Models\CivilStatu;
use Illuminate\Database\Seeder;

class CivilStatusSeeder extends Seeder
{
    public function run()
    {
        CivilStatu::create(['name'=>'Soltero']);
        CivilStatu::create(['name'=>'Casado']);
        CivilStatu::create(['name'=>'Union Libre']);
    }
}

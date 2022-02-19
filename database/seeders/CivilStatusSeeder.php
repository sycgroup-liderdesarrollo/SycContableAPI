<?php

namespace Database\Seeders;

use App\Models\CivilStatus;
use Illuminate\Database\Seeder;

class CivilStatusSeeder extends Seeder
{
    public function run()
    {
        CivilStatus::create(['name'=>'Soltero']);
        CivilStatus::create(['name'=>'Casado']);
        CivilStatus::create(['name'=>'Union Libre']);
    }
}

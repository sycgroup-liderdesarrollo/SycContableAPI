<?php

namespace Database\Seeders;

use App\Models\HealthProvider;
use Illuminate\Database\Seeder;

class HealthProvidersSeeder extends Seeder
{

    public function run()
    {
        HealthProvider::create(['name'=>'Salud total']);
        HealthProvider::create(['name'=>'Sura']);
        HealthProvider::create(['name'=>'Nueva EPS']);
    }
}

<?php

namespace Database\Seeders;

use App\Models\OccupationalRiskManager;
use Illuminate\Database\Seeder;

class OccupationalRiskManagerSeeder extends Seeder
{
    public function run()
    {
        OccupationalRiskManager::create(['class'=>'CLASE I', 'name'=>'Riesgo mínimo','porcentage'=>0.522]);
        OccupationalRiskManager::create(['class'=>'CLASE II', 'name'=>'Riesgo bajo','porcentage'=>1.044]);
        OccupationalRiskManager::create(['class'=>'CLASE III', 'name'=>'Riesgo medio','porcentage'=>2.436]);
        OccupationalRiskManager::create(['class'=>'CLASE IV', 'name'=>'Riesgo alto','porcentage'=>4.350]);
        OccupationalRiskManager::create(['class'=>'CLASE V', 'name'=>'Riesgo máximo','porcentage'=>6.960]);
    }
}

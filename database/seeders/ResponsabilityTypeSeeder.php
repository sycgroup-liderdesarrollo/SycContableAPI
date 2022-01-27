<?php

namespace Database\Seeders;

use App\Models\ResponsabilityType;
use Illuminate\Database\Seeder;

class ResponsabilityTypeSeeder extends Seeder
{

    public function run()
    {
        ResponsabilityType::create(['name'=>'Responsable de IVA']);
        ResponsabilityType::create(['name'=>'No responsable de IVA']);
    }
}

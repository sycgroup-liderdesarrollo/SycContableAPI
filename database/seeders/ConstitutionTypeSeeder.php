<?php

namespace Database\Seeders;

use App\Models\ConstitutionType;
use Illuminate\Database\Seeder;

class ConstitutionTypeSeeder extends Seeder
{
    public function run()
    {
        ConstitutionType::create(['name'=>'Natural']);
        ConstitutionType::create(['name'=>'Juridica']);
    }
}

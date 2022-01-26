<?php

namespace Database\Seeders;

use App\Models\EducationLevel;
use Illuminate\Database\Seeder;

class EducationLevelSeeder extends Seeder
{
    public function run()
    {
        EducationLevel::create(['name'=>'Basica']);
        EducationLevel::create(['name'=>'Bachiller']);
        EducationLevel::create(['name'=>'Tecnico']);
        EducationLevel::create(['name'=>'Profesional']);
    }
}

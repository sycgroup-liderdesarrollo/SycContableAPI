<?php

namespace Database\Seeders;

use App\Models\Kinship;
use Illuminate\Database\Seeder;

class KinshipSeeder extends Seeder
{
    public function run()
    {
        Kinship::create(['name'=>'Madre']);
        Kinship::create(['name'=>'Padre']);
        Kinship::create(['name'=>'Hermano(a)']);
    }
}

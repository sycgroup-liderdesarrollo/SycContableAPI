<?php

namespace Database\Seeders;

use App\Models\EmergencyContact;
use Illuminate\Database\Seeder;

class EmergencyContactSeeder extends Seeder
{
    public function run()
    {
        EmergencyContact::create(['name'=>'Patricia','phone'=>'3113012618','kinship_id'=>'1']);
    }
}

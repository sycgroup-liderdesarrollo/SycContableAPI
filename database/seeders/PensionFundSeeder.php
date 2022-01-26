<?php

namespace Database\Seeders;

use App\Models\PensionFund;
use Illuminate\Database\Seeder;

class PensionFundSeeder extends Seeder
{
    public function run()
    {
        PensionFund::create(['name'=>'Porvenir']);
        PensionFund::create(['name'=>'Protección']);
    }
}

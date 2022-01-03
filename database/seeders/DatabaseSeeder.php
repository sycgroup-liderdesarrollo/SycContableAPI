<?php

namespace Database\Seeders;

use App\Http\Controllers\IdentificationTypeController;
use App\Models\ContractType;
use App\Models\Position;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PositionSeeder::class,
            BusinessLineSeeder::class,
            ContractTypeSeeder::class,
            SalaryTypeSeeder::class,
            HeadquarterSeeder::class,
            IdentificationTypeSeeder::class,
            ConceptTypeSeeder::class,
            CovenantTypeSeeder::class,
            PeriodicityTypeSeeder::class,
            PeriodSeeder::class,
            SettingSeeder::class,
            ConceptSeeder::class,
        ]);
    }
}

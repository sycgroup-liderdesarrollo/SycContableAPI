<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ConstitutionTypeSeeder::class,
            ProvinceSeeder::class,
            CitySeeder::class,
            CivilStatusSeeder::class,
            EducationLevelSeeder::class,
            KinshipSeeder::class,
            EmergencyContactSeeder::class,
            GenderSeeder::class,
            HealthProvidersSeeder::class,
            PensionFundSeeder::class,
            ResponsabilityTypeSeeder::class,
            StrataSeeder::class,
            BusinessLineSeeder::class,
            PositionSeeder::class,
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
            UserSeeder::class
        ]);
    }
}

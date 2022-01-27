<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::create(['danecode'=>5,'name'=>'Antioquia','prefix'=>606]);
        Province::create(['danecode'=>15,'name'=>'Boyacá','prefix'=>606]);
        Province::create(['danecode'=>23,'name'=>'Córdoba','prefix'=>606]);
        Province::create(['danecode'=>27,'name'=>'Chocó','prefix'=>606]);
        Province::create(['danecode'=>52,'name'=>'Nariño','prefix'=>606]);
        Province::create(['danecode'=>68,'name'=>'Santander','prefix'=>606]);
        Province::create(['danecode'=>8,'name'=>'Atlántico','prefix'=>606]);
        Province::create(['danecode'=>13,'name'=>'Bolívar','prefix'=>606]);
        Province::create(['danecode'=>17,'name'=>'Caldas','prefix'=>606]);
        Province::create(['danecode'=>18,'name'=>'Caquetá','prefix'=>606]);
        Province::create(['danecode'=>19,'name'=>'Cauca','prefix'=>606]);
        Province::create(['danecode'=>20,'name'=>'Cesar','prefix'=>606]);
        Province::create(['danecode'=>25,'name'=>'Cundinamarca','prefix'=>606]);
        Province::create(['danecode'=>41,'name'=>'Huila','prefix'=>606]);
        Province::create(['danecode'=>44,'name'=>'La Guajira','prefix'=>606]);
        Province::create(['danecode'=>47,'name'=>'Magdalena','prefix'=>606]);
        Province::create(['danecode'=>50,'name'=>'Meta','prefix'=>606]);
        Province::create(['danecode'=>63,'name'=>'Quindío','prefix'=>606]);
        Province::create(['danecode'=>66,'name'=>'Risaralda','prefix'=>606]);
        Province::create(['danecode'=>70,'name'=>'Sucre','prefix'=>606]);
        Province::create(['danecode'=>73,'name'=>'Tolima','prefix'=>606]);
        Province::create(['danecode'=>81,'name'=>'Arauca','prefix'=>606]);
        Province::create(['danecode'=>85,'name'=>'Casanare','prefix'=>606]);
        Province::create(['danecode'=>86,'name'=>'Putumayo','prefix'=>606]);
        Province::create(['danecode'=>91,'name'=>'Amazonas','prefix'=>606]);
        Province::create(['danecode'=>94,'name'=>'Guainía','prefix'=>606]);
        Province::create(['danecode'=>97,'name'=>'Vaupés','prefix'=>606]);
        Province::create(['danecode'=>99,'name'=>'Vichada','prefix'=>606]);
        Province::create(['danecode'=>95,'name'=>'Guaviare','prefix'=>606]);
        Province::create(['danecode'=>88,'name'=>'Archipiélago de San Andrés, Providencia y Santa Catalina','prefix'=>606]);
        Province::create(['danecode'=>11,'name'=>'Bogotá D.C.','prefix'=>606]);
        Province::create(['danecode'=>54,'name'=>'Norte de Santander','prefix'=>606]);
        Province::create(['danecode'=>76,'name'=>'Valle del Cauca','prefix'=>606]);

    }
}

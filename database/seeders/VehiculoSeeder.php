<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehiculo;
class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vehiculo::create([
            "patente" => "OOH757",
            "modelo_id"  =>  1 //Fiesta
        ]);

        Vehiculo::create([
            "patente" => "AC571UM",
            "modelo_id"  =>  4 //Kangoo
        ]);
    }
}

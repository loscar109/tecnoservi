<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Marca;
class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marca::create([
            "nombre" => "Ford"
        ]);

        Marca::create([
            "nombre" => "Renault"
        ]);

        Marca::create([
            "nombre" => "Chevrolet"
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSoftwareSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categoria_software')->insert([
            'catSf_nombre' => 'Agricultural',
            'catSf_descripcion' => null,
            'catSf_logo' => 'categorias_software/Agricultural.png',
        ]);
        DB::table('categoria_software')->insert([
            'catSf_nombre' => 'Automotive',
            'catSf_descripcion' => null,
            'catSf_logo' => 'categorias_software/Automotive.png'
        ]);
        DB::table('categoria_software')->insert([
            'catSf_nombre' => 'Forklit',
            'catSf_descripcion' => null,
            'catSf_logo' => 'categorias_software/Forklit.png'
        ]);
        DB::table('categoria_software')->insert([
            'catSf_nombre' => 'Generators',
            'catSf_descripcion' => null,
            'catSf_logo' => 'categorias_software/Generators.png'
        ]);
        DB::table('categoria_software')->insert([
            'catSf_nombre' => 'Heavy Equipment',
            'catSf_descripcion' => null,
            'catSf_logo' => 'categorias_software/HeavyEquipment.png'
        ]);
        DB::table('categoria_software')->insert([
            'catSf_nombre' => 'Marine',
            'catSf_descripcion' => null,
            'catSf_logo' => 'categorias_software/Marine.png'
        ]);
        DB::table('categoria_software')->insert([
            'catSf_nombre' => 'Transmision',
            'catSf_descripcion' => null,
            'catSf_logo' => 'categorias_software/Transmision.png'
        ]);
        DB::table('categoria_software')->insert([
            'catSf_nombre' => 'Truck & Heavy Truck',
            'catSf_descripcion' => null,
            'catSf_logo' => 'categorias_software/TruckHeavyTruck.png'
        ]);

    }
}

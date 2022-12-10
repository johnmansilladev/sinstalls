<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicio')->insert([
            'serv_nombre' => 'Instalacion 1 PC',
            'serv_descripcion' => null,
            //'serv_requireCheckPc' => rand(0, 1),
            'serv_requireCheckPc' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('servicio')->insert([
            'serv_nombre' => 'files + keygen (UNLOCKED)',
            'serv_descripcion' => null,
            'serv_requireCheckPc' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('servicio')->insert([
            'serv_nombre' => 'files + keygen (BLOCK PC)',
            'serv_descripcion' => null,
            'serv_requireCheckPc' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('servicio')->insert([
            'serv_nombre' => 'files (NO CRACK/ACTIVATION REQUIRED)',
            'serv_descripcion' => null,
            'serv_requireCheckPc' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('servicio')->insert([
            'serv_nombre' => 'files + crack (UNLOCKED)',
            'serv_descripcion' => null,
            'serv_requireCheckPc' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('servicio')->insert([
            'serv_nombre' => 'files + license (UNLOCKED)',
            'serv_descripcion' => null,
            'serv_requireCheckPc' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('servicio')->insert([
            'serv_nombre' => 'Activation Code',
            'serv_descripcion' => null,
            'serv_requireCheckPc' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}

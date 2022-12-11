<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OperadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('operador')->insert([
            'ope_nombre' => 'Claro',
            'ope_logo' => 'operadores/Claro.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('operador')->insert([
            'ope_nombre' => 'Bitel',
            'ope_logo' => 'operadores/Bitel.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('operador')->insert([
            'ope_nombre' => 'Movistar',
            'ope_logo' => 'operadores/Movistar.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('operador')->insert([
            'ope_nombre' => 'Entel',
            'ope_logo' => 'operadores/Entel.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

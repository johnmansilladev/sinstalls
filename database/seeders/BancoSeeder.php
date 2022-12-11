<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use Faker\Factory as Faker;

class BancoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //$this->faker =  Faker::create();
        DB::table('banco')->insert([
            'ban_nombre' => 'BBVA Continental',
            'ban_alias' => 'BBVA',
            //'ban_descripcion' => $this->faker->text(25),
            'ban_logo' => 'bancos/bbva.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('banco')->insert([
            'ban_nombre' => 'Interbank',
            'ban_alias' => 'INTBNK',
            //'ban_descripcion' => $this->faker->text(25),
            'ban_logo' => 'bancos/interbank.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('banco')->insert([
            'ban_nombre' => 'Banco de Crédito del Perú',
            'ban_alias' => 'BCP',
            //'ban_descripcion' => $this->faker->text(25),
            'ban_logo' => 'bancos/bcp.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('banco')->insert([
            'ban_nombre' => 'Scotiabank',
            'ban_alias' => 'SCTBNK',
            //'ban_descripcion' => $this->faker->text(25),
            'ban_logo' => 'bancos/scotiabank.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

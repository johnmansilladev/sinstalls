<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class PlataformaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker =  Faker::create();

        DB::table('plataforma')->insert([
            'plat_nombre' => 'Paypal',
            'plat_descripcion' => $this->faker->text(100),
            'plat_url' => $this->faker->url(),
            'plat_logo' => 'plataformas/Paypal.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('plataforma')->insert([
            'plat_nombre' => 'CoinBase',
            'plat_descripcion' => $this->faker->text(100),
            'plat_url' => $this->faker->url(),
            'plat_logo' => 'plataformas/CoinBase.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('plataforma')->insert([
            'plat_nombre' => 'Binance',
            'plat_descripcion' => $this->faker->text(100),
            'plat_url' => $this->faker->url(),
            'plat_logo' => 'plataformas/Binance.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('plataforma')->insert([
            'plat_nombre' => 'WesternUnion',
            'plat_descripcion' => $this->faker->text(100),
            'plat_url' => $this->faker->url(),
            'plat_logo' => 'plataformas/WesternUnion.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

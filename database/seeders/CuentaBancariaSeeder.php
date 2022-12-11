<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Cuentas\CuentaBancaria;
use App\Models\Cuentas\Tarjeta;
use Database\Factories\Cuentas\TarjetaFactory;
//use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CuentaBancariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->faker = Faker::create();
        $cuentasBancarias = 10;

        CuentaBancaria::factory()->count($cuentasBancarias)
            ->has(Tarjeta::factory()->count(1))
            ->create();
        
    }
}

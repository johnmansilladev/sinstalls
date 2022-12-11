<?php

namespace Database\Seeders;

use App\Http\Controllers\Cuentas\ChipController;
use App\Models\Cuentas\Plataforma;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Módulo Instalaciones

        $this->call(MarcaSoftwareSeeder::class);
        $this->call(CategoriaSoftwareSeeder::class);
        $this->call(InterfaceSeeder::class);
        $this->call(ServicioSeeder::class);
        $this->call(EstadosInstalacionSeeder::class);
        $this->call(SoftwareSeeder::class);

        //Módulo Ventas

        $this->call(ClienteSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(CanalVentaSeeder::class);

        //Módulo Cuentas
        $this->call(ProveedorSeeder::class);
        $this->call(BancoSeeder::class);
        $this->call(CriptomonedaSeeder::class);
        $this->call(OperadorSeeder::class);
        $this->call(PlataformaSeeder::class);
        $this->call(ChipWithHistorialSeeder::class);
    }
}

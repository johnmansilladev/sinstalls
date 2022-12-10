<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(MarcaSoftwareSeeder::class);
        $this->call(CategoriaSoftwareSeeder::class);
        $this->call(InterfaceSeeder::class);
        $this->call(ServicioSeeder::class);
    }
}

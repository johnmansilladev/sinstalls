<?php

namespace Database\Seeders;

use App\Models\Instalaciones\MarcaSoftware;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcaSoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MarcaSoftware::factory()->count(10)->create();
    }
}

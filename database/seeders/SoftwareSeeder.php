<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Instalaciones\Software;
use App\Models\Instalaciones\VersionSoftware;

//use Faker\Factory as Faker;
class SoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Software::factory()->count(75)->create();

        $softwares = 75;

        Software::factory()->count($softwares)
            ->has(VersionSoftware::factory()->count(3), 'versionSoftwares')
            ->create();
    }
}

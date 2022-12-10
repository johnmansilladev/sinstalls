<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brand')->insert([
            'bra_nombre' => 'AnyEPC',
            'bra_dominio' => 'anyepc.com',
            'bra_logo'=> 'anyepc.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('brand')->insert([
            'bra_nombre' => 'Diagxiq',
            'bra_dominio' => 'diagxiq.com',
            'bra_logo'=> 'Diagxiq.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('brand')->insert([
            'bra_nombre' => 'Mecaprograms',
            'bra_dominio' => 'mecaprograms.com',
            'bra_logo'=> 'mecaprograms.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('brand')->insert([
            'bra_nombre' => 'IntiDiesel',
            'bra_dominio' => 'intiDiesel.pe',
            'bra_logo'=> 'intidiesel.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

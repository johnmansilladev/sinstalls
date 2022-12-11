<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cuentas\Chip;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ChipWithHistorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker =  Faker::create();
        $carbon = new Carbon();
        $numChipsToCreate =  15;
        $historialRegisterByChip =  3 ;
        $dateRecarga = $carbon->parse('2022-08-01');
        
        Chip::factory()->count($numChipsToCreate)->create();
        
        for ($i=1; $i <= $numChipsToCreate; $i++) {
            
            for ($j=1; $j <= $historialRegisterByChip; $j++) { 
                
                $dateRecarga->addMonth();
                
                DB::table('historial_recarga')->insert([
                    'hrec_chip_id' => $i,
                    'hrec_monto' => $this->faker->numberBetween(5, 20),
                    'hrec_fecha' => $dateRecarga,
                    'hrec_user_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
                
            }
            $dateRecarga = $carbon->parse('2022-08-01');
        }
        


    }
}

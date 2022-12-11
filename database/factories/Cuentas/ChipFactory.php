<?php

namespace Database\Factories\Cuentas;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cuentas\Operador;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cuentas\Chip>
 */
class ChipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'chip_numero' => $this->faker->numberBetween(987654321,999888777),
            'chip_ope_id'=> Operador::inRandomOrder()->value('ope_id'),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}

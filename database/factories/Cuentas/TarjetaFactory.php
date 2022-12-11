<?php

namespace Database\Factories\Cuentas;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cuentas\CuentaBancaria;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cuentas\Tarjeta>
 */
class TarjetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tar_cuentBan_id' => CuentaBancaria::inRandomOrder()->value('cuentBan_id'),
            'tar_numero' => $this->faker->numerify('42##88##55##75##'),
            'tar_anioVcto' => $this->faker->numberBetween(2023, 2027),
            'tar_mesVcto' => $this->faker->numberBetween(1, 12),
            'tar_cvv' => $this->faker->numberBetween(100, 999),
            'tar_passwordCajero' => $this->faker->password(),
            'tar_passwordWeb' => $this->faker->password(),
            'created_at' => now(),
            'updated_at' => now()

        ];
    }
}

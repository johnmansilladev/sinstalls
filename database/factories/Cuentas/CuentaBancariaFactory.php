<?php

namespace Database\Factories\Cuentas;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cuentas\Banco;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cuentas\CuentaBancaria>
 */
class CuentaBancariaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cuentBan_ban_id' => Banco::inRandomOrder()->value('ban_id'),
            'cuentBan_titular' => $this->faker->name(). ' '. $this->faker->lastName(),
            'cuentBan_numeroCuenta' => $this->faker->numerify('00##-0###-0#########'),
            'cuentBan_cci' => $this->faker->numerify('0##-###-000#########-##'),
            'cuentBan_moneda' => rand(0,1),
            'cuentBan_descripcion' => $this->faker->text(65),
            'cuentBan_tipoCuenta' => rand(1,2),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}

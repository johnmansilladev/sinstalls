<?php

namespace Database\Factories\Cuentas;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cuentas\Proveedor>
 */
class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'prov_razonSocial'=> $this->faker->company(),
            "prov_descripcion" => $this->faker->text(75),
            "prov_medioContacto" => '{whatsapp: null, telegram:null, skype: null}',
            "prov_estado" => rand(0,1),
            "created_at" => now(),
            "updated_at" => now()
        ];
    }
}

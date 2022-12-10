<?php

namespace Database\Factories\Ventas;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name =  $this->faker->firstName();
        $lastName =  $this->faker->lastName();
        return [
            'cli_nombreCompleto'=> $name. ' '.  $lastName,
            "cli_email" => $this->faker->userName().'@'. $this->faker->freeEmailDomain(),
            "cli_medioContacto" => '{whatsapp: null, telegram:null, skype: null}',
            "cli_celular" => $this->faker->phoneNumber(),
            "cli_region" => $this->faker->currencyCode(),
            "cli_pais" => $this->faker->countryCode(),
            "cli_subscribe" => rand(0,1),
            "created_at" => now(),
            "updated_at" => now()
        ];
    }
}

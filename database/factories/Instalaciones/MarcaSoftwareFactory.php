<?php

namespace Database\Factories\Instalaciones;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MarcaSoftwareFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'mars_idPadre'=> null,
            "mars_nombre" => $this->faker->company(),
            "mars_descripcion" => $this->faker->text(125),
            "mars_logo" => Str::random(12). '.png',
        ];
    }
}

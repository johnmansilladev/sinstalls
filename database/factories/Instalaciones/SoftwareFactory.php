<?php

namespace Database\Factories\Instalaciones;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Instalaciones\MarcaSoftware;
use App\Models\Instalaciones\CategoriaSoftware;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instalaciones\Software>
 */
class SoftwareFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'soft_mars_id'=> MarcaSoftware::inRandomOrder()->value('mars_id'),
            "soft_catSf_id" => CategoriaSoftware::inRandomOrder()->value('catSf_id'),
            "soft_nombre" => $this->faker->jobTitle(). ' '. rand(2015, 2022). '.0'. rand(1,9),
            "soft_descripcion" => $this->faker->text(75),
            "soft_logo" => Str::random(10). '.png',
            "created_at" => now(),
            "updated_at" => now(),
        ];
    }
}

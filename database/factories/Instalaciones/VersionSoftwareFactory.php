<?php

namespace Database\Factories\Instalaciones;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Instalaciones\Software;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instalaciones\VersionSoftware>
 */
class VersionSoftwareFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $size = rand(100, 400);
        $unidad =  $this->faker->randomElement(['MB', 'GB']);
        return [
            'verSf_soft_id' => Software::inRandomOrder()->value('soft_id'),
            'verSf_nombre' => rand(2015, 2022). '.0'. rand(1,9),
            'verSf_descripcion' => $this->faker->text(75),
            'verSf_soCompatibles' => '{}',
            'verSf_enlaces' => '{}',
            'verSf_estado' => rand(0,1),
            'verSf_dbLanguage' => $this->faker->languageCode(),
            'verSf_intLanguage' => $this->faker->languageCode(),
            'verSf_licenseTime' => $this->faker->randomElement(['Unlimited', '1 year']),
            'verSf_size' => $size. ' '. $unidad,
            'verSf_sizeAfterInstall' => ($size +  rand(100,200)). ' '. $unidad,
            'verSf_models' => '{}',
            'verSf_news' => $this->faker->realText(),
            
        ];
    }
}

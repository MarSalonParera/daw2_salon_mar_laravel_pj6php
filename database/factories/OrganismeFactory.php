<?php

namespace Database\Factories;

use App\Models\Organisme;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganismeFactory extends Factory
{
    protected $model = Organisme::class;

    public function definition(): array
    {
        return [
            'titol_llibre' => fake()->sentence(4),
            'codi_oficial' => strtoupper(fake()->unique()->bothify('ONU-###??')),
            'nom_organisme' => fake()->company(),
            'tipus' => fake()->randomElement(['organisme', 'fons', 'programa', 'agencia']),
            'any_fundacio' => fake()->numberBetween(1945, 2026),
            'pressupost_anual' => fake()->randomFloat(2, 100000, 500000000),
            'pais_seu' => fake()->country(),
            'ciutat_seu' => fake()->city(),
            'data_creacio_registre' => fake()->date(),
            'nombre_empleats' => fake()->numberBetween(10, 50000),
            'actiu' => fake()->boolean(),
            'web_oficial' => fake()->url(),
        ];
    }
}

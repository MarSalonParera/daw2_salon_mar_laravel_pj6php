<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Organisme;

class OrganismeFactory extends Factory
{
    protected $model = Organisme::class;

    public function definition(): array
    {
        return [
            'titol_llibre' => fake()->sentence(3),
            'codi_oficial' => strtoupper(fake()->unique()->bothify('ORG###??')),
            'nom_organisme' => fake()->company(),
            'tipus' => fake()->randomElement(['organisme','fons','programa','agència']),
            'any_fundacio' => fake()->numberBetween(1900, 2024),
            'pressupost_anual' => fake()->randomFloat(2, 100000, 10000000),
            'pais_seu' => fake()->country(),
            'ciutat_seu' => fake()->city(),
            'data_creacio_registre' => fake()->date(),
            'nombre_empleats' => fake()->numberBetween(10, 50000),
            'actiu' => fake()->boolean(),
            'web_oficial' => fake()->url(),
        ];
    }
}
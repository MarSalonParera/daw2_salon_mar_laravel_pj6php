<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Treballador;

class TreballadorFactory extends Factory
{
    protected $model = Treballador::class;

    public function definition(): array
    {
        return [
            'nom' => fake()->firstName(),
            'cognoms' => fake()->lastName(),
            'nif' => strtoupper(fake()->bothify('########?')),
            'data_naixement' => fake()->date('Y-m-d', '-18 years'),
            'sexe' => fake()->randomElement(['H', 'D']),
            'adressa' => fake()->address(),
            'tlf_fixe' => fake()->numberBetween(900000000, 999999999),
            'tlf_mobil' => fake()->numberBetween(600000000, 799999999),
            'email' => fake()->unique()->safeEmail(),
            'fotografia' => null,
            'treball_distancia' => fake()->boolean(),
            'tipus_contracte' => fake()->randomElement([
                'temporal',
                'indefinit',
                'en formació',
                'en pràctiques'
            ]),
            'data_contractacio' => fake()->date(),
            'categoria' => fake()->numberBetween(1, 10),
            'nom_feina' => substr(fake()->jobTitle(), 0, 30),
            'sou' => fake()->randomFloat(2, 1200, 5000),
        ];
    }
}
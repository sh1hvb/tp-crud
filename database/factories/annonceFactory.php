<?php

namespace Database\Factories;

use App\Models\Annonce;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\annonce>
 */
class annonceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'type' => $this->faker->randomElement(['Maison', 'Appartement', 'Terrain']),
            'ville' => $this->faker->city(),
            'superficie' => $this->faker->numberBetween(50, 1000),
            'neuf' => $this->faker->boolean(),
            'prix' => $this->faker->numberBetween(50000, 500000),
        
        ];
    }
}

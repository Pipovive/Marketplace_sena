<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */

//  use Hash;
//  use Faker\Generator as Faker;


class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'movile' => $this->faker->unique()->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('password'), // password
            'rol' => $this->faker->randomElement(['admin', 'user']),
            'estado' => $this->faker->boolean(),
            'ciudad_id' => 1 // Assuming you have a Ciudad factory
        ];
    }
}

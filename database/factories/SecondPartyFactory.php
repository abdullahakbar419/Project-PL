<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SecondParty>
 */
class SecondPartyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'fullname' => fake()->name(),
            'nip' => fake()->unique()->randomNumber(9, true),
            'position' => fake()->randomElement(['Kepala Divisi', 'Staff', 'Kepala Departement']),
            'email' => fake()->safeEmail(),
            'handphone' => fake()->numerify('####-####-####'),
        ];
    }
}
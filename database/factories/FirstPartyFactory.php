<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FirstParty>
 */
class FirstPartyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nip' => fake()->unique()->randomNumber(9, true),
            'fullname' => fake()->name(),
            'position' => fake()->randomElement(['Sekertaris Utama', 'Kepala BIG', 'Kepala Department']),
            'agency' => fake()->randomElement(['Badan informasai Geospasial', 'Univeritas Pakuan', 'Badan Riset Inovasi Nasional']),
            'email' => fake()->safeEmail(),
            'handphone' => fake()->numerify('####-####-####'),
        ];
    }
}
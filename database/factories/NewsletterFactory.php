<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Newsletter>
 */
class NewsletterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => fake()->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            'first_party_id' => fake()->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            'second_party_id' => fake()->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(3),
            'category' => fake()->randomElement(['Kategori 1', 'Kategori 2', 'Kategori 3', 'Kategori 4']),
            'kld' => fake()->randomElement(['k', 'l', 'd']),
            'number_letter_of_assignment' => fake()->randomNumber(8, true),
            'location_city' => fake()->city(),
            'event_date' => fake()->dateTime(),
        ];
    }
}
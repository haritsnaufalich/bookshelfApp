<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(mt_rand(2, 5)),
            'genre_id' => fake()->numberBetween(1, 4),
            'author_id' => fake()->numberBetween(1, 3),
            'slug' => strtolower(str_replace(' ', '-', fake()->sentence(mt_rand(2, 5)))),
            'description' => fake()->paragraph(mt_rand(6, 8)),
            'year' => fake()->year,
            'pages' => fake()->numberBetween(100, 600),
        ];
    }
}

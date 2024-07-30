<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'isbn' => fake()->unique()->isbn13(),
            'title' => fake()->sentence(),
            'author' => fake()->name(),
            'description' => fake()->paragraph(),
            'date_published' => fake()->date(),
        ];

    }
}

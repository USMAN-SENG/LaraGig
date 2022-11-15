<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->unique()->sentence(),
            'excerpt' => fake()->paragraph(2),
            'body' => fake()->paragraph(4),
            'image_path' => fake()->imageUrl(360, 360, 'animals', true, 'cats'),
            'is_published' => false,
            'min_to_read' => fake()->numberBetween(1,10),
        ];
    }
}

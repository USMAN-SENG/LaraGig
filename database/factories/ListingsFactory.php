<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listings>
 */
class ListingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=> fake()->unique()->sentence(3),
            'logo'=> fake()->imageUrl(360, 360, 'animals', true, 'cats'),
            'tags'=> 'laravel , api , backend , PHP',
            'company'=> fake()->company(),
            'location'=> fake()->city()   ,
            'email'=> fake()->unique()->safeEmail(),
            'website'=> fake()->url(),
            'description'=> fake()->paragraphs(2, true),
        ];
    }
}

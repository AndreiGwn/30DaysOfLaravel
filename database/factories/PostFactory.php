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
    public function definition(): array
    {
        $title = fake()->sentence();
        return [
            'title' => $title,
            'content' => fake()->paragraphs(rand(3, 8), true),
            'slug' => \Illuminate\Support\Str::slug($title),
            'published' => fake()->boolean(80), // 80% chance of being published
            'published_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}

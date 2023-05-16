<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(6, true);
        $slug = Str::slug($title, '-');
        $image = 'https://placehold.co/400';
        $body =  $this->faker->paragraph(150, true);
        $created_at = $this->faker->dateTimeBetween();

        return [
            'title' => $title,
            'slug' => $slug,
            'image' => $image,
            'body' => $body,
            'created_at' => $created_at
        ];
    }
}

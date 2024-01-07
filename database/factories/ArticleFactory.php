<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence, // Generates a random sentence.
            'content' => fake()->paragraph, // Generates a random paragraph.
            'validated' => fake()->boolean, // Generates a random boolean.
            'category' => Category::factory(), // Generates a random word.
            'author_id' => User::factory(), // Assuming User model exists and has a factory.
            'validated_by' => User::factory(), // Assuming User model exists and has a factory.
            'validated_date' => fake()->date, // Generates a random date.
        ];
    }
}

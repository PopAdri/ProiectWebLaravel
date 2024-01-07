<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $articleTypes = [
            'artistic' => 'Artistic',
            'technic' => 'Technic',
            'science' => 'Science',
            'fashion' => 'Fashion'
        ];

        // We get the keys from the above array $userTypes
        $arrayKeys = array_keys($articleTypes);

        // We obtain a random key from the array keys
        $elementKey = fake()->randomElement($arrayKeys);

        return [
            'type' => $elementKey,

            // We get the value for the randomly selected key
            'label' => $articleTypes[$elementKey],
        ];
    }
}

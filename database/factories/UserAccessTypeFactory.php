<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserAccessTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userTypes = [
            'jurnalist' => 'Jurnalist',
            'editor' => 'Editor',
            'cititor' => 'Cititor'
        ];

        // We get the keys from the above array $userTypes
        $arrayKeys = array_keys($userTypes);

        // We obtain a random key from the array keys
        $elementKey = fake()->randomElement($arrayKeys);

        return [
            'type' => $elementKey,

            // We get the value for the randomly selected key
            'label' => $userTypes[$elementKey],
        ];
    }
}

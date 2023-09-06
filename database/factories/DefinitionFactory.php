<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Definition>
 */
class DefinitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        $definition = fake()->realTextBetween($minNbChars = 160, $maxNbChars = 200, $indexSize = 2);

        return [
            'definition' => $definition
        ];
    }
}

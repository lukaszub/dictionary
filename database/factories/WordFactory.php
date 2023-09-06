<?php

namespace Database\Factories;

use App\Models\Definition;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Word>
 */
class WordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $word = ucwords($this->faker->word);
        
        return [
            'definition_id' => Definition::factory(),
            'word' => $word
        ];
    }
    
}

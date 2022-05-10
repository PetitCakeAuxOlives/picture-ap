<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Joke>
 */
class JokeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'image' => $this->faker->imageUrl(640, 480, $this->faker->words(2,true),true),
            'title' => $this->faker->sentence(10),
            'text' => $this->faker->text(),
            'user' => $this->faker->name(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Picture>
 */
class PictureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //'name' => $this->faker->name(),
            'author' => $this->faker->name(),
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->text(),
            'url' => $this->faker->imageUrl(640, 480, $this->faker->words(2,true),true), // password
            'likes' => $this->faker->numberBetween(1, 100) // password
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post1>
 */
class Post1Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->paragraph(1),
            'description' => $this->faker->paragraph(6),
            'user_id' => \App\Models\User::all()->random()->id,
        ];
    }
}

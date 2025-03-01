<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

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
    $title = $this->faker->sentence;
    return [
      'title' => $title,
      'slug' => Str::slug($title),
      'user_id' => fake()->numberBetween(1, 20),
      'content' => $this->faker->paragraph,
    ];
  }
}

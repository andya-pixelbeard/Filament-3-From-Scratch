<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->name(),
            'is_active' => true,
            'status' => 'in stock',
            'description' => fake()->unique()->name(),
            'category_id' => Category::all()->random(1)->first()->id,
            'price' => fake()->numberBetween(0, 10000)
        ];
    }
}

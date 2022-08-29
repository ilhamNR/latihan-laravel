<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use PhpParser\Node\Expr\Cast\Double;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word(),
            'slug' => fake()->slug(),
            'price' => fake()->numerify('##########'),
            'description'=> fake()->sentence(mt_rand(1,50)),
            'photo' => fake()->imageUrl(),
            'store_id' => mt_rand(1,50),
            //
        ];
    }
}

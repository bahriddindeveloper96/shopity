<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
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
            'category_id' => rand(1,3),
            'name' => [
                "uz" => fake()->sentence(2),
                "ru" => fake()->sentence(3),
            ],
            
            'price' => rand(50000,100000),
            'description' => [
                "uz" => fake()->paragraph(5),
                "ru" => fake()->paragraph(5),
            ],
            'content' => [
                "uz" => fake()->paragraph(10),
                "ru" => fake()->paragraph(10),
            ],
            
        ];
    }
}

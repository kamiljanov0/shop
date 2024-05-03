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
            Product::create([
                'sub_category_id' =>rand(1,6),
                'name' => fake()->sentence(3),
                'price' => rand(15000, 1500000),
                'stock_quantity'=>rand(10,100),
                'description' => fake()->paragraph(5),
            ])
        ];
    }
}

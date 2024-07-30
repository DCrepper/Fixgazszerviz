<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
        $name = fake()->word;
        $slug = Str::slug($name);

        return [
            'name' => $name,
            'slug' => $slug,
            'type' => 'product',
            'status' => 'publish',
            'catalog_visibility' => 'visible',
            'sku' => Str::random(10),
            'price' => fake()->randomFloat(2, 10, 100),
            'regular_price' => fake()->randomFloat(2, 10, 100),
            'sale_price' => fake()->randomFloat(2, 10, 100),
            'stock_quantity' => fake()->numberBetween(1, 100),
            'stock_status' => 'instock',
            'weight' => fake()->randomFloat(2, 0.1, 10),
            'length' => fake()->randomFloat(2, 0.1, 10),
            'width' => fake()->randomFloat(2, 0.1, 10),
            'height' => fake()->randomFloat(2, 0.1, 10),
            'shipping_class' => '',
            'short_description' => fake()->sentence,
            'description' => fake()->sentence,
        ];
    }
}

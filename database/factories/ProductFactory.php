<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {
        return [
            'title' => fake()->numerify('Book ###'),
            'description' => fake()->paragraphs(4, true),
            'price' => fake()->randomFloat(2, 100, 999),
            'barcode' => fake()->ean8(),
            'stock' => fake()->numberBetween(0, 99),
            'cover' => 'https://www.bwallpaperhd.com/wp-content/uploads/2019/04/HCABooks-640x480.jpg'
        ];
    }
}

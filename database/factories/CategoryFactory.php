<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->randomElement([
                'Fantasy',
                'Science Fiction',
                'Action & Adventure',
                'Mystery',
                'Horror',
                'Historical Fiction',
                'Romance',
                'Graphic Novel',
                'Children’s',
                'Memoir & Autobiography',
                'Food & Drink',
                'Art & Photography',
                'History',
                'Travel',
                'Humor',
                'Guide / How-to',
                'Religion & Spirituality',
                'Science & Technology'])
        ];
    }
}

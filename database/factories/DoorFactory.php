<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Door;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Door>
 */
final class DoorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => fake()->randomNumber(4),
            'price' => fake()->numberBetween(10000, 100000),
            'name' => fake()->name(),
            'img_url' => 'resources/img/placeholder.webp',
            'tag' => 'teszt-tag',
            'tag_name' => 'Teszt Kategória',
            'tag_img_url' => 'resources/img/placeholder.webp',
            'tag_category' => 'kategoria',
            'category_id' => 1,
        ];
    }
}

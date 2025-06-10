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
            'name' => fake()->name(),
            'img_url' => 'resources/img/placeholder.webp',
        ];
    }
}

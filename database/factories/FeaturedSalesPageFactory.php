<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\FeaturedSalesPage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<FeaturedSalesPage>
 */
final class FeaturedSalesPageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'slug' => fake()->unique()->slug(),
            'content' => fake()->paragraphs(3, true),
            'excerpt' => fake()->sentence(),
            'json_schema' => null,
        ];
    }
}

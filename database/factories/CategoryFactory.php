<?php

namespace Database\Factories;

use App\CategoryType;
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
    public function definition(): array
    {
        return [
            //
        ];
    }

    public function type(CategoryType $categoryType): static
    {
        return $this->state(fn () => [
            'type' => $categoryType,
        ]);
    }
}

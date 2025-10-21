<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class; // saista factory ar Product modeli

    public function definition(): array
    {
        return [
            'name' => faker->word(),
            'quantity' => faker->numberBetween(1, 100),
            'description' =>faker->sentence(),
        ];
    }
}

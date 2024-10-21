<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->word(),
            'modelo' => $this->faker->word(),
            'precio' => $this->faker->randomFloat(2, 10, 1000),
            'descripcion' => $this->faker->sentence(),
            'imagen' => $this->faker->imageUrl(),
            'categoria' => $this->faker->word(),
            'proveedorID' => $this->faker->numberBetween(1, 10),
        ];
    }
}

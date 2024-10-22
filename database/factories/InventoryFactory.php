<?php

namespace Database\Factories;

use App\Models\InventoryHistory;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryHistoryFactory extends Factory
{
    protected $model = InventoryHistory::class;

    public function definition()
    {
        return [
            'ProductoID' => \App\Models\Product::factory(),  // Suponiendo que hay una relación con la tabla 'products'
            'CantidadModificada' => $this->faker->numberBetween(-50, 50),  // Puede ser positivo o negativo
            'Motivo' => $this->faker->sentence(),
            'FechaModificación' => $this->faker->dateTime(),
        ];
    }
}

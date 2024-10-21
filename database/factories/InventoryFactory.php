<?php

namespace Database\Factories;

use App\Models\Inventory;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryFactory extends Factory
{
    protected $model = Inventory::class;

    public function definition()
    {
        return [
            'ProductoID' => \App\Models\Product::factory(),  // Puedes cambiar esto según tu relación con la tabla 'products'
            'CantidadDisponible' => $this->faker->numberBetween(10, 100),
            'UbicaciónEnAlmacén' => $this->faker->word(),
            'ÚltimaRevisión' => $this->faker->dateTime(),
        ];
    }
}

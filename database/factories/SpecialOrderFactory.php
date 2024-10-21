<?php

namespace Database\Factories;

use App\Models\SpecialOrder;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpecialOrderFactory extends Factory
{
    protected $model = SpecialOrder::class;

    public function definition()
    {
        return [
            'ClienteID' => Customer::factory(), // Genera un cliente o usa uno existente
            'ProductoID' => Product::factory(), // Genera un producto o usa uno existente
            'CantidadSolicitada' => $this->faker->numberBetween(1, 100),
            'EstadoPedido' => $this->faker->randomElement(['En Espera', 'En Proceso de Adquisición', 'Completado']),
            'FechaSolicitud' => $this->faker->dateTimeThisYear(),
        ];
    }
}


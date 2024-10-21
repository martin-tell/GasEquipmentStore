<?php

namespace Database\Factories;

use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\Product;

class OrderDetailFactory extends Factory
{
    protected $model = OrderDetail::class;

    public function definition()
    {
        return [
            'PedidoID' => Order::factory(), // Crea una orden o usa una existente
            'ProductoID' => Product::factory(), // Crea un producto o usa uno existente
            'Cantidad' => $this->faker->numberBetween(1, 10),
            'PrecioUnitario' => $this->faker->randomFloat(2, 50, 500),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\SalesReport;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalesReportFactory extends Factory
{
    protected $model = SalesReport::class;

    public function definition()
    {
        return [
            'FechaReporte' => $this->faker->dateTimeThisYear(),
            'TotalVentas' => $this->faker->randomFloat(2, 500, 50000),
            'CantidadProductosVendidos' => $this->faker->numberBetween(1, 100),
            'PedidoID' => Order::factory(),  // Relación con un pedido
            'UsuarioID' => User::factory(),  // Relación con un usuario
        ];
    }
}

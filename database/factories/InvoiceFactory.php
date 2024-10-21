<?php

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    protected $model = Invoice::class;

    public function definition()
    {
        return [
            'PedidoID' => \App\Models\Order::factory(), // Suponiendo que hay una relación con la tabla 'orders'
            'ClienteID' => \App\Models\Customer::factory(), // Suponiendo que hay una relación con la tabla 'customers'
            'Total' => $this->faker->randomFloat(2, 100, 1000),
            'FechaEmisión' => $this->faker->dateTime(),
            'MétodoPago' => $this->faker->randomElement(['Efectivo', 'Tarjeta', 'Transferencia']),
        ];
    }
}

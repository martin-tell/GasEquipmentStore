<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrderFactory extends Factory
{
    // El modelo al que este factory está asociado
    protected $model = Order::class;

    /**
     * Define el estado por defecto de un pedido.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ClienteID' => $this->faker->numberBetween(1, 10), // Dependiendo de cuántos clientes tienes
            'FechaPedido' => $this->faker->dateTimeThisYear(),
            'EstadoPedido' => $this->faker->randomElement(['Pendiente', 'Completado', 'Cancelado']),
            'Total' => $this->faker->randomFloat(2, 100, 1000),
            'FechaEntrega' => $this->faker->dateTimeBetween('+1 week', '+1 month'),
            'DirecciónEnvio' => $this->faker->address(),
            'MétodoPago' => $this->faker->randomElement(['Efectivo', 'Tarjeta', 'Transferencia']),
            'PedidoEspecial' => $this->faker->boolean(20), // 20% de probabilidades de ser especial
        ];
    }
}

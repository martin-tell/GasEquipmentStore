<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Corre el seeder.
     *
     * @return void
     */
    public function run()
    {
        // Crea 50 pedidos falsos
        Order::factory()->count(10)->create();
    }
}

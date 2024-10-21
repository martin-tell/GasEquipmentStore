<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderDetail;

class OrderDetailSeeder extends Seeder
{
    public function run()
    {
        // Crear 10 registros de detalles de órdenes usando la fábrica
        OrderDetail::factory()->count(10)->create();
    }
}

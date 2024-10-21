<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InventoryHistory;

class InventoryHistorySeeder extends Seeder
{
    public function run()
    {
        // Crear 10 registros en la tabla de historial de inventario
        InventoryHistory::factory()->count(10)->create();
    }
}

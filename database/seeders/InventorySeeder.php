<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    public function run()
    {
        // Crear 10 registros de inventario usando la fábrica
        Inventory::factory()->count(10)->create();
    }
}

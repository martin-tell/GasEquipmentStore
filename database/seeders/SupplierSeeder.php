<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier; // Asegúrate de importar tu modelo

class SupplierSeeder extends Seeder
{
    public function run()
    {
        // Crear 10 proveedores usando la fábrica
        Supplier::factory()->count(10)->create();
    }
}

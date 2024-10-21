<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invoice;

class InvoiceSeeder extends Seeder
{
    public function run()
    {
        // Crear 10 registros de facturas usando la fábrica
        Invoice::factory()->count(10)->create();
    }
}

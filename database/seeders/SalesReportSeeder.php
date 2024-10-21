<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SalesReport;

class SalesReportSeeder extends Seeder
{
    public function run()
    {
        // Crear 10 reportes de ventas utilizando la fábrica
        SalesReport::factory()->count(10)->create();
    }
}

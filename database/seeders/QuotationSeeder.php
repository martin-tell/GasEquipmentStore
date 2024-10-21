<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quotation;

class QuotationSeeder extends Seeder
{
    public function run()
    {
        // Crear 10 cotizaciones utilizando la fábrica
        Quotation::factory()->count(10)->create();
    }
}

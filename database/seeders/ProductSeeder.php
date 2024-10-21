<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Crear 10 productos usando la fábrica
        Product::factory()->count(10)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SpecialOrder;

class SpecialOrderSeeder extends Seeder
{
    public function run()
    {
        // Crear 10 órdenes especiales utilizando la fábrica
        SpecialOrder::factory()->count(10)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Crear 10 usuarios utilizando la fábrica
        User::factory()->count(10)->create();
    }
}

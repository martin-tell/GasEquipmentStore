<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    protected $model = Supplier::class;

    public function definition()
    {
        return [
            'NombreProveedor' => $this->faker->company(),
            'Teléfono' => $this->faker->phoneNumber(),
            'CorreoElectrónico' => $this->faker->unique()->safeEmail(),
            'Dirección' => $this->faker->address(),
        ];
    }
}


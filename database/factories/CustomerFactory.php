<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    public function definition()
    {
        return [
            'NombreCompleto' => $this->faker->name(),
            'CorreoElectrónico' => $this->faker->unique()->safeEmail(),
            'Teléfono' => $this->faker->phoneNumber(),
            'Dirección' => $this->faker->address(),
        ];
    }
}


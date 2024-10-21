<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'NombreUsuario' => $this->faker->userName,
            'CorreoElectrónico' => $this->faker->unique()->safeEmail,
            'Contraseña' => bcrypt('password'), // Puedes cambiar esto según sea necesario
            'Rol' => $this->faker->randomElement(['Administrador', 'Vendedor', 'Cliente']),
            'FechaCreación' => $this->faker->dateTimeThisYear(),
            'ÚltimaConexión' => $this->faker->optional()->dateTimeThisMonth(),
        ];
    }
}

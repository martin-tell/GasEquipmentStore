<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'NombreUsuario',
        'CorreoElectrónico',
        'Contraseña',
        'Rol',
        'FechaCreación',
        'ÚltimaConexión',
    ];

    public $timestamps = false; // No hay columnas `created_at` ni `updated_at`
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'NombreCompleto',
        'CorreoElectrónico',
        'Teléfono',
        'Dirección',
    ];

    public $timestamps = false; // Desactiva los timestamps si no tienes created_at y updated_at
}

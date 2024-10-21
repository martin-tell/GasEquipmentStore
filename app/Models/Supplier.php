<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    // Especifica la tabla si no sigue la convención plural
    protected $table = 'suppliers';

    // Campos que son asignables en masa
    protected $fillable = [
        'NombreProveedor',
        'Teléfono',
        'CorreoElectrónico',
        'Dirección',
    ];

    // Si deseas habilitar timestamps (creación y actualización automáticas)
    public $timestamps = false; // Esto es por defecto, puedes omitirlo
}

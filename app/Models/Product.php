<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Especifica la tabla si no sigue la convención plural
    protected $table = 'products';

    // Campos que son asignables en masa
    protected $fillable = [
        'nombre',
        'modelo',
        'precio',
        'descripcion',
        'imagen',
        'categoria',
        'proveedorID',
        'fechaCreacion',
        'fechaActualizacion',
    ];

    // Campos que deben ser tratados como fechas
    protected $dates = [
        'fechaCreacion',
        'fechaActualizacion',
    ];

    // Si quieres habilitar timestamps (creación y actualización automáticas)
    public $timestamps = true; // Esto es por defecto, puedes omitirlo
}

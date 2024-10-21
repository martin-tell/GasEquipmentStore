<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialOrder extends Model
{
    use HasFactory;

    protected $table = 'specialorders';

    protected $fillable = [
        'ClienteID',
        'ProductoID',
        'CantidadSolicitada',
        'EstadoPedido',
        'FechaSolicitud',
    ];

    public $timestamps = false; // No hay columnas `created_at` ni `updated_at`
}

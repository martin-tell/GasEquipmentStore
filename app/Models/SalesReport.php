<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesReport extends Model
{
    use HasFactory;

    protected $table = 'salesreports';

    protected $fillable = [
        'FechaReporte',
        'TotalVentas',
        'CantidadProductosVendidos',
        'PedidoID',
        'UsuarioID',
    ];

    public $timestamps = false; // No hay columnas `created_at` ni `updated_at`
}

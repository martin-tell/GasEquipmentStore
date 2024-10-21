<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'orderdetails';

    protected $fillable = [
        'PedidoID',
        'ProductoID',
        'Cantidad',
        'PrecioUnitario',
    ];

    public $timestamps = false; // Ya que no hay columnas `created_at` y `updated_at`
}

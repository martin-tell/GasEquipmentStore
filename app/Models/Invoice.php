<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoices';

    protected $fillable = [
        'PedidoID',
        'ClienteID',
        'Total',
        'FechaEmisión',
        'MétodoPago',
    ];

    public $timestamps = false; // Desactivar timestamps ya que tienes 'FechaEmisión'
}

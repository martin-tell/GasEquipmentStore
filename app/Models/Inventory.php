<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'inventory';

    protected $fillable = [
        'ProductoID',
        'CantidadDisponible',
        'UbicaciónEnAlmacén',
        'ÚltimaRevisión',
    ];

    public $timestamps = false; // Desactivamos los timestamps ya que solo tienes 'ÚltimaRevisión'
}

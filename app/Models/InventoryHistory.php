<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryHistory extends Model
{
    use HasFactory;

    protected $table = 'inventoryhistory';

    protected $fillable = [
        'ProductoID',
        'CantidadModificada',
        'Motivo',
        'FechaModificación',
    ];

    public $timestamps = false; // Desactiva los timestamps ya que tienes 'FechaModificación'
}

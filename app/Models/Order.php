<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Nombre de la tabla en la base de datos
    protected $table = 'orders';

    // Llave primaria
    protected $primaryKey = 'ID';

    // Campos que se pueden llenar masivamente
    protected $fillable = [
        'ClienteID',
        'FechaPedido',
        'EstadoPedido',
        'Total',
        'FechaEntrega',
        'DirecciónEnvio',
        'MétodoPago',
        'PedidoEspecial'
    ];

    // Para trabajar con timestamps automáticos si es necesario (created_at, updated_at)
    public $timestamps = false;

    // Relación con Cliente (Ejemplo de cómo agregar relaciones si la tienes definida)
    public function cliente()
    {
        return $this->belongsTo(Customer::class, 'ClienteID');
    }
}

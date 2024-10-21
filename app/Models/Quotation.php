<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    protected $table = 'quotations';

    protected $fillable = [
        'ClienteID',
        'TotalCotización',
        'FechaCotización',
        'VálidaHasta',
    ];

    public $timestamps = false; // No hay columnas `created_at` ni `updated_at`
}

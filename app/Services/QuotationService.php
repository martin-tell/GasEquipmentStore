<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class QuottionService
{
    public function getAllQuotations()
    {
        $quotations = DB::table('quotations')
            ->join('users', 'users.id', '=', 'quotations.clienteId')
            ->select('quotations.*', 'users.id as userId', 'users.nombreUsuario as username', 'users.rol as rol');
        return $quotations;
    }
}
<?php
    
namespace App\Services;

use App\Models\Supplier;

class SupplierService
{
    public function getAllSuppliers()
    {
        return Supplier::all();
    }
}

?>
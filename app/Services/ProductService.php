<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Inventory;
use Illuminate\Support\Facades\DB;

class ProductService
{
    public function getAllProducts()
    {
        $products = DB::table('products')
            ->join('inventory', 'products.id', '=', 'inventory.inventory.id')
            ->select('products.*', 'inventory.cantidadDisponible as cantidad', 'inventory.ubicaciónEnAlmacén as ubicacion');
        return $products;
    }
}
?>
<?php

namespace App\Services;

use App\Models\Inventory;
use App\Models\InventoryHistory;
use Illuminate\Support\Facades\DB;

class InventoryService
{
    public function getInventory()
    {
        $inventory = DB::table('inventory')
            ->join('inventoryHistory', 'inventory.id', '=', 'inventoryHistory.')
            ->join('customer', 'order.clienteId', '=', 'customer.id')
            ->select('orders.*', 'orderDetails.cantidad as cantidad', 'orderDetails.precioUnitario as precioUnitario', 'customer.id as customerId', 'customer.NombreCompleto as customerName');
        return $inventory;
    }
}
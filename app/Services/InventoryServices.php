<?php

namespace App\Services;

use App\Models\Inventory;
use App\Models\InventoryHistory;
use Illuminate\Support\Facades\DB;

class OrderService
{
    public function getAllOrders()
    {
        $orders = DB::table('inventory')
            ->join('inventoryHistory', 'inventory.id', '=', 'inventoryHistory.')
            ->join('customer', 'order.clienteId', '=', 'customer.id')
            ->select('orders.*', 'orderDetails.cantidad as cantidad', 'orderDetails.precioUnitario as precioUnitario', 'customer.id as customerId', 'customer.NombreCompleto as customerName');
        return $orders;
    }
}
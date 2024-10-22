<?php

namespace App\Services;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class OrderService
{
    public function getAllOrders()
    {
        $orders = DB::table('orders')
            ->join('orderDetails', 'orders.id', '=', 'orderDetails.pedidoId')
            ->join('customer', 'order.clienteId', '=', 'customer.id')
            ->join('invoices', 'order.Id', '=', 'invoices.pedidoId')
            ->select('orders.*', 'orderDetails.cantidad as cantidad', 'orderDetails.precioUnitario as precioUnitario', 'customer.id as customerId', 'customer.NombreCompleto as customerName', 'invoice.fechaEmisión as fechaEmision', 'invoice.métodoPago as metodoPago');
        return $orders;
    }
}
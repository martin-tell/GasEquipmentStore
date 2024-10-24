<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Services\InventoryService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $inventoryService;

    public function __construct(InventoryService $inventoryService)
    {
        $this->orderService = $inventoryService;
    }

    public function index()
    {
        $inventory = $this->inventoryService->getInventory();
        return view('inventory.index', compact('inventory'));
    }
}
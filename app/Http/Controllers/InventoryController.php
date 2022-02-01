<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    //
    public function index()
    {
        $invetory = Inventory::get()->all();
        return response()->json(["message" => "Hallo Api Working", "data" => $invetory], 200);
    }
}

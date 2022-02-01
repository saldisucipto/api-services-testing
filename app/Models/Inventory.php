<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\InventoryFactory;

class Inventory extends Model
{
    use HasFactory;
    protected $table = 'inventories';
    protected $guarded = [];

    protected static function newFactory()
    {
        return InventoryFactory::new();
    }
}

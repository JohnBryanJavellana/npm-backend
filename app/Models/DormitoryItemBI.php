<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DormitoryItemBI extends Model
{
    use HasFactory;

    public function item()
    {
        return $this->belongsTo(DormitoryInventoryItem::class, 'dormitory_inventory_item_id', 'id');
    }
}

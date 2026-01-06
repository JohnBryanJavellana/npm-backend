<?php

namespace App\Models;

use App\Enums\RequestStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DormitoryInventoryItem extends Model
{
    use HasFactory;

    public function borrowed()
    {
        return $this->hasMany(DormitoryItemBI::class);
    }

    public function itemInfo()
    {
        return $this->belongsTo(DormitoryInventory::class, "dormitory_inventory_id", "id");
    }

    /**
     * Scopes
     */

    public function scopeAvailable($query)
    {
        return $query->where("status", RequestStatus::AVAILABLE->value);
    }
}

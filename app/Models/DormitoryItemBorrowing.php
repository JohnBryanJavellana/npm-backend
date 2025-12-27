<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DormitoryItemBorrowing extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tenant()
    {
        return $this->belongsTo(DormitoryTenant::class, 'dormitory_tenant_id', 'id');
    }

    public function inventory()
    {
        return $this->belongsTo(DormitoryInventory::class, 'dormitory_inventory_id', 'id');
    }

    public function items ()
    {
        return $this->hasMany(DormitoryItemBI::class, 'dormitory_item_borrowing_id', 'id');
    }
}

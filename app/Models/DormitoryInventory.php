<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DormitoryInventory extends Model
{
    use HasFactory;

    // moved to dormitory item model
    // public function borrowed()
    // {
    //     return $this->hasMany(DormitoryItemBorrowing::class);
    // }

    public function stock()
    {
        return $this->hasMany(DormitoryInventoryItem::class);
    }

    public function borrowings()
    {
        return $this->hasMany(DormitoryItemBorrowing::class);
    }

    public function charge()
    {
        return $this->hasOne(Charge::class, 'id', 'charge_id');
    }
}

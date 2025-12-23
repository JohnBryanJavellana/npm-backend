<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DormitoryInventory extends Model
{
    use HasFactory;


    public function borrowed()
    {
        return $this->hasMany(DormitoryItemBorrowing::class);
    }

    public function stock ()
    {
        return $this->hasMany(DormitoryInventoryItem::class);
    }
}

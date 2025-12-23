<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DormitoryItemBorrowing extends Model
{
    use HasFactory;

    public function tenant()
    {
        return $this->belongsTo(DormitoryTenant::class);
    }
    public function inventory()
    {
        return $this->belongsTo(DormitoryInventory::class);
    }
}

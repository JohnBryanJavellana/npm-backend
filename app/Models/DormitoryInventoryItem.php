<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DormitoryInventoryItem extends Model
{
    use HasFactory;

    public function borrowed()
    {
        return $this->hasMany(DormitoryItemBorrowing::class);
    }
}

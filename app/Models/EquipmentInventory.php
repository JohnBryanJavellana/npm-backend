<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentInventory extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    
    /**
     * Related
     */
    public function equipments()
    {
        return $this->belongsTo(Equipment::class);
    }


    /**
     * Scopes
     */
}

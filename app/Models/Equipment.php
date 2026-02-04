<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    /**
     * Related
     */

    public function inventories()
    {
        return $this->hasMany(EquipmentInventory::class);
    }

    public function relatedFacility()
    {
        return $this->hasMany(RelatedFacility::class);
    }
    /**
     * Scopes
     */

    public function scopeAvailable($query)
    {
        return $query->where("availability_status", "AVAILABLE");
    }
}

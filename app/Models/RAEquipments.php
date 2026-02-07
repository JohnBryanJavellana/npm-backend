<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RAEquipments extends Model
{
    use HasFactory;

    public function hasData() {
        return $this->hasManyThrough(
            RAEquipmentRequest::class,
            RAEquipmentStock::class,
<<<<<<< HEAD
            'r_a_equipments_id', //balikada la
            'r_a_equipment_stock_id' // ini hira na duha
=======
            'r_a_equipments_id',
            'r_a_equipment_stock_id'
>>>>>>> a92aa035b3e1ecfe75af708a7eddc443e05f7c31
        );
    }

    public function images() {
        return $this->hasMany(RAEquipmentImage::class);
    }

    public function stocks() {
        return $this->hasMany(RAEquipmentStock::class);
    }

    public function relatedFacility()
    {
        return $this->hasMany(RARelationship::class);
    }
    /**
     * Scopes
     */

    public function scopeAvailable(Builder $query)
    {
        return $query->where("availability_status", "AVAILABLE");
    }

}

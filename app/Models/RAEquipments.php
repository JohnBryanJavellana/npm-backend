<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RAEquipments extends Model
{
    use HasFactory;

    public function hasData() {
        return $this->hasManyThrough(
            RAEquipmentRequest::class,
            RAEquipmentStock::class,
            'r_a_equipments_id',
            'r_a_equipment_stock_id'
        );
    }

    public function images() {
        return $this->hasMany(RAEquipmentImage::class);
    }

    public function stocks() {
        return $this->hasMany(RAEquipmentStock::class);
    }
}

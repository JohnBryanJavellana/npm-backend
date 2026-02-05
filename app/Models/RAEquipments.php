<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RAEquipments extends Model
{
    use HasFactory;

    public function hasData() {
        return $this->hasMany(RAEquipmentRequest::class);
    }

    public function images() {
        return $this->hasMany(RAEquipmentImage::class);
    }

    public function stocks() {
        return $this->hasMany(RAEquipmentStock::class);
    }
}

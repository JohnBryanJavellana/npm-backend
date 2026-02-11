<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RAEquipmentRequest extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function equipment() {
        return $this->hasOne(RAEquipments::class, 'id', 'r_a_equipments_id');
    }

    public function equipment_stock() {
        return $this->hasOne(RAEquipmentStock::class, 'id', 'r_a_equipment_stock_id');
    }

    public function updatedByWhom() {
        return $this->hasOne(User::class, 'id', 'updated_by_whom');
    }
}

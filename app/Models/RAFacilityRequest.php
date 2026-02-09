<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RAFacilityRequest extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function facility() {
        return $this->hasOne(RAEquipments::class, 'id', 'r_a_equipments_id');
    }
}

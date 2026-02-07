<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RARelationship extends Model
{
    use HasFactory;

    public function facility()
    {
        return $this->belongsTo(RAFacility::class, "r_a_facility_id", "id");
    }
    public function equipment()
    {
        return $this->belongsTo(RAEquipments::class, "r_a_equipments_id", "id");
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RAEquipmentRequest extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function facility() {
        return $this->hasOne(RAFacility::class, 'id', 'r_a_facility_id');
    }
}

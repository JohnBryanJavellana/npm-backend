<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RAFacilityRequest extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function facility() {
        return $this->hasOne(RAFacility::class, 'id', 'r_a_facility_id');
    }

    public function updatedByWhom() {
        return $this->hasOne(User::class, 'id', 'updated_by_whom');
    }
}

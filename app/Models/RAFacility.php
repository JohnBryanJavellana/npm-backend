<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RAFacility extends Model
{
    use HasFactory;

    public function hasData() {
        return $this->hasMany(RAFacilityRequest::class);
    }

    public function images() {
        return $this->hasMany(RAFacilityImage::class);
    }

    public function relationships() {
        return $this->hasMany(RARelationship::class);
    }
}

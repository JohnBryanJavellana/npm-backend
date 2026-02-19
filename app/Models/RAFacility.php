<?php

namespace App\Models;

use App\Enums\RequestStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Relationship;
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

    public function relatedEquipment()
    {
        return $this->hasMany(RARelationship::class);
    }

    /**
     * Scopes
     **/
    public function scopeAvailable(Builder $query)
    {
        return $query->where("availability_status", RequestStatus::AVAILABLE->value);
    }

    public function scopeOkayCondition(Builder $query)
    {
        return $query->whereIn("condition_status", ["GOOD CONDITION", "DAMAGED"]);
    }   

    public function scopeUniqueIdentifier(Builder $query,array $ui)
    {
        return $query->whereIn("unique_identifier", $ui);
    }
}

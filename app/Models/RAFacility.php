<?php

namespace App\Models;

use App\Enums\RequestStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RAFacility extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function hasData() {
        return $this->hasMany(RAFacilityRequest::class);
    }

    public function images() {
        return $this->hasMany(RAFacilityImage::class);
    }

    public function relationships() {
        return $this->hasMany(RARelationship::class);
    }

    public function relationshipToEquipment() {
        return $this->belongsToMany(RAEquipments::class, 'r_a_relationships', 'r_a_facility_id', 'r_a_equipments_id');
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

    public function scopeOccupied(Builder $query)
    {
        return $query->whereIn( "status",[RequestStatus::APPROVED->value, RequestStatus::OCCUPIED->value]);
    }
}

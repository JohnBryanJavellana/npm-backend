<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RAEquipmentStock extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    /**
     * Related
     */
    public function hasData() {
        return $this->hasMany(RAEquipmentRequest::class);
    }

    public function equipment()
    {
        return $this->belongsTo(RAEquipments::class, "r_a_equipments_id", "id");
    }
    
    public function siblings()
    {
        return $this->hasMany(self::class, "r_a_equipments_id", "r_a_equipments_id");
    }

    /**
     * Scopes
     **/
    public function scopeAvailable(Builder $query)
    {
        return $query->where("availability_status", "AVAILABLE");
    }

    public function scopeOkayCondition(Builder $query)
    {
        return $query->whereIn("condition_status", ["GOOD CONDITION", "DAMAGED"]);
    }

    public function scopeUniqueIdentifier(Builder $query,string $unique)
    {
        return $query->where("unique_identifier", $unique);
    }
}

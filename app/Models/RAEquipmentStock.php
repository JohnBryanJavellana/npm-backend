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
}

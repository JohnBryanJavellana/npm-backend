<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RARequestInfo extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function requestor() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function equipment_request() {
        return $this->hasMany(RAEquipmentRequest::class);
    }

    public function facility_request() {
        return $this->hasMany(RAFacilityRequest::class);
    }

    public function invoices() {
        return $this->hasMany(RAInvoices::class);
    }

    public function csm()
    {
        return $this->hasOne(CSM::class, 'reference_id', 'id');
    }

    /** Scopes */

    public function scopeStatus(Builder $query, array $statuses)
    {
        return $query->whereIn("status", $statuses);
    }

    public function scopeForUser(Builder $query, int $user_id)
    {
        return $query->where("user_id", $user_id);
    }
}

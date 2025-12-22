<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DormitoryTenant extends Model{

    protected $guarded = ['id'];


    public function trainee() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function dormitory_room() {
        return $this->belongsTo(DormitoryRoom::class, 'dormitory_room_id', 'id');
    }

    public function tenant_invoices() {
        return $this->hasMany(DormitoryInvoice::class, 'dormitory_tenant_id', 'id');
    }

    public function dormitory_histories () {
        return $this->hasMany(DormitoryTenantHistory::class, 'dormitory_tenant_id', 'id');
    }

    public function transferRequest()
    {
        return $this->hasOne(DormitoryTransfer::class, 'dormitory_tenant_id', 'id');
    }

    public function extendRequest()
    {
        return $this->hasOne(DormitoryExtendRequest::class, 'dormitory_tenant_id', 'id');
    }
    
    /**
     * SCOPES
     */
    public function scopeForUser($query, $userId)
    {
        return $query->where("user_id", $userId);
    }
    public function scopeForStatus($query, $status)
    {
        return $query->whereIn("tenant_status", $status);
    }
}

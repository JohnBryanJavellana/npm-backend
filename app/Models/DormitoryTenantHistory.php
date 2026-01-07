<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DormitoryTenantHistory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tenants()
    {
        return $this->belongsTo(DormitoryTenant::class);
    }


    /**
     * Scopes
     */

    public function scopeTenant($query, $tenantId)
    {
        return $query->where('dormitory_tenant_id', $tenantId);
    }
}

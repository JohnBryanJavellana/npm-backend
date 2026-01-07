<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DormitoryInclusionRequest extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function tenant()
    {
        return $this->belongsTo(DormitoryTenant::class, "dormitory_tenant_id", "id");
    }

    public function itemInfo()
    {
        return $this->belongsTo(DormitoryInventory::class, "dormitory_inventory_id", "id");
    }

    /** Scopes */
    public function scopeStatus($query, array $status)
    {
        return $query->whereIn("status", $status);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DormitoryReqService extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function services()
    {
        return $this->hasOne(DormitoryService::class, 'id', 'dormitory_service_id');
    }

    public function tenant()
    {
        return $this->belongsTo(DormitoryTenant::class, 'dormitory_tenant_id', 'id');
    }

    public function invoice()
    {
        return $this->hasOne(DormitoryInvoice::class, 'id', 'dormitory_invoices_id');
    }

    /** Scopes */

    public function scopeForStatus($query, array $status)
    {
        return $query->whereIn("status", $status);
    }
}

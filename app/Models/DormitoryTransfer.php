<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DormitoryTransfer extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function tenant()
    {
        return $this->belongsTo(DormitoryTenant::class, "dormitory_tenant_id", "id");
    }

    /** Scopes */

    public function scopeForUser(Builder $query, int $userId)
    {
        return $query->whereRelation("tenant","user_id", "=", $userId);
    }

    public function scopeForTenant(Builder $query, int $documentId)
    {
        return $query->where("dormitory_tenant_id", $documentId);
    }
    public function scopeStatus(Builder $query, array $status)
    {
        return $query->whereIn("status", $status);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DormitoryExtendRequest extends Model
{
    use HasFactory;


    public function tenant()
    {
        return $this->hasOne(DormitoryTenant::class, 'id', 'dormitory_tenant_id');
    }

    /** Scopes */
    public function scopeStatus(Builder $query, array $status)
    {
        return $query->whereIn("tenant_status", $status);
    }

    public function scopeForUser(Builder $query, int $userId)
    {
        return $query->where("user_id", $userId);
    }
}

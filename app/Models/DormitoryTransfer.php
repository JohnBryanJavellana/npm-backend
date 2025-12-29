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
        return $this->hasOne(DormitoryTenant::class, 'id', 'dormitory_tenant_id');
    }

    /** Scopes */

    public function scopeForUser(Builder $query, int $userId)
    {
        return $query->where("user_id", $userId);
    }

    public function scopeStatus(Builder $query, array $status)
    {
        return $query->whereIn("status", $status);
    }
}

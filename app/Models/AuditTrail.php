<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class AuditTrail extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /** Scopes */

    public function scopeForUser(Builder $query, $userId)
    {
        return $query->where("user_id", $userId);
    }
}

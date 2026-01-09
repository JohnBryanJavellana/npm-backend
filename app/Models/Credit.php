<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;

    protected $guarded = ["id"];
    /**
     * Scopes
     */

    public function creditOwner() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function scopeForUser($query, $userId)
    {
        return $query->where("user_id", $userId);
    }
}

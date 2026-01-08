<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    protected $fillable = [
        "user_id",
        "reason",
        "amount",
        "type",
    ];




    /**
     * Scopes
     */

    public function scopeForUser($query, $userId)
    {
        return $query->where("user_id", $userId);
    }
}

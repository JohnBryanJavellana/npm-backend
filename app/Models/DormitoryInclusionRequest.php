<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DormitoryInclusionRequest extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    /** Scopes */

    public function scopeStatus($query, array $status)
    {
        return $query->whereIn("status", $status);
    }
}

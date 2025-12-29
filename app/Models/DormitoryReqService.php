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
        return $this->belongsTo(DormitoryService::class);
    }

    /** Scopes */

    public function scopeForStatus($query, array $status)
    {
        return $query->whereIn("status", $status);
    }
}

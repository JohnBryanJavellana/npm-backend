<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatestSBExp extends Model
{
    use HasFactory;

    public function license() {
        return $this->belongsTo(License::class, 'license_id', 'id');
    }

    public function rank()
    {
        return $this->belongsTo(Rank::class, 'rank_id', 'id');
    }
}

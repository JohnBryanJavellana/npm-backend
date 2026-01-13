<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatestSBExp extends Model
{
    use HasFactory;

    public function licensesssssss() {
        return $this->belongsTo(License::class, 'license_id', 'id');
    }

    public function rankkkkkkkkkkkkkkkkk()
    {
        return $this->belongsTo(Rank::class, 'rank_id', 'id');
    }
}

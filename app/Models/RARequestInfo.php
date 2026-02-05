<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RARequestInfo extends Model
{
    use HasFactory;

    public function requestor() {
        return $this->hasOne(User::class);
    }
}

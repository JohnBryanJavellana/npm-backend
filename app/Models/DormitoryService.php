<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DormitoryService extends Model
{
    use HasFactory;

    public function requestedService () {
        return $this->hasMany(DormitoryReqService::class);
    }

    public function charge () {
        return $this->hasOne(Charge::class, 'id', 'charge_id');
    }
}

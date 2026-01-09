<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dormitory extends Model
{
    use HasFactory;

    public function room_images () {
        return $this->hasMany(DormitoryRoomImage::class);
    }

    public function rooms () {
        return $this->hasMany(DormitoryRoom::class);
    }

    public function tenants(){
        return $this->hasManyThrough(DormitoryTenant::class, DormitoryRoom::class, 'dormitory_id', 'dormitory_room_id', 'id', 'id');
    }

    public function roomCharge () {
        return $this->hasOne(Charge::class, 'id', 'charge_id_room_cost');
    }

    public function guestCharge () {
        return $this->hasOne(Charge::class, 'id', 'charge_id_guest_cost');
    }
}

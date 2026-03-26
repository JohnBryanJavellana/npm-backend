<?php

namespace App\Models;

use App\Enums\RequestStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class DormitoryRoom extends Model
{

    protected $guarded = ['id'];

    protected $appends = ['room_images'];

    public function hasData()
    {
        return $this->hasMany(DormitoryTenant::class);
    }

    // public function dormitory()
    // {
    //     return $this->hasOne(Dormitory::class, "id", "dormitory_id");
    // }


    /** Scopes */

    public function scopeAvailable(Builder $query)
    {
        return $query->where("room_status", RequestStatus::AVAILABLE->value);
    }

    public function getRoomImagesAttribute() {
        return $this->roomImages()->get();
    }

    public function roomImages() {
        return $this->hasMany(DormitoryRoomImage::class, 'dormitory_room_id', 'id');
    }

}

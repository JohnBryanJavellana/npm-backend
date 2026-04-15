<?php

namespace App\Models;

use App\Enums\RequestStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class DormitoryRoom extends Model
{

    protected $table = 'dormitory_rooms';

      protected $fillable = [
        'room_name', 'room_slot', 'dormitory', 'guest_gender', 'wing',
        'floor', 'accommodation', 'room_cost', 'guest_cost', 'remarks',
        'name', 'room_type','room_slot','guest_gender', 'capacity'   
    ];

    protected $guarded = ['id'];

    protected $appends = ['room_images'];

    public function hasData()
    {
        return $this->hasMany(DormitoryTenant::class, 'dormitory_room_id', 'id');
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
    
    public function tenants()
        {
            return $this->hasMany(DormitoryTenant::class, 'dormitory_room_id', 'id');
        }
}

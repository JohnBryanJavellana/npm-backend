<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DormitoryRoom extends Model
{

    protected $guarded = ['id'];

    public function hasData () {
        return $this->hasMany(DormitoryTenant::class);
    }

    public function dormitory()
    {
        return $this->hasOne(Dormitory::class, "id", "dormitory_id");
    }
}

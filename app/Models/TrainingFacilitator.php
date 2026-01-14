<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingFacilitator extends Model
{
    use HasFactory;

    public function hasData(){
        return $this->hasMany(CourseModule::class, 'id', 'course_module_id')->whereHas('schedules', function($query) {
            $query->where('status', 'ACTIVE');
        });
    }

    public function facilitator() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function module() {
        return $this->hasOne(CourseModule::class, 'id', 'course_module_id');
    }
}

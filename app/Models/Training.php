<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    // reason? please specify (.)
    public const STATUS_ACTIVE = 'ACTIVE';
    public const STATUS_INACTIVE = 'INACTIVE';

    public function hasData() {
        return $this->hasMany(EnrolledCourse::class, 'training_id', 'id');
    }

    public function module() {
        return $this->hasOne(CourseModule::class, 'id', 'course_module_id');
    }

    public function training_requirement() {
        return $this->hasMany(TrainingRequirement::class, 'training_id', 'id');
    }
}

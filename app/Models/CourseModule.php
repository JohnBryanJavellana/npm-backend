<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModule extends Model
{
    use HasFactory;

    public function hasData() {
        return $this->hasMany(RequirementSpecificModule::class);
    }

    public function schedules() {
        return $this->hasMany(Training::class, 'course_module_id', 'id');
    }

    public function fee()
    {
        return $this->hasOne(TrainingFee::class);
    }

    public function moduleType() {
        return $this->hasOne(ModuleType::class, 'id', 'module_type_id');
    }
}

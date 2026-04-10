<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModule extends Model
{
    use HasFactory;

    public function hasData()
    {
        return $this->hasMany(RequirementSpecificModule::class);
    }

    public function handout()
    {
        return $this->hasMany(CourseModuleHandouts::class);
    }
    public function courseModuleSection()
    {
        return $this->hasMany(CourseModuleSection::class);
    }

    public function specific_requirements()
    {
        return $this->belongsToMany(
            Requirement::class,
            'requirement_specific_modules',
            'course_module_id',
            'requirement_id'
        );
    }

    public function schedules()
    {
        return $this->hasMany(Training::class, 'course_module_id', 'id');
    }

    /**
     * TO BE REMOVED 🍆💦
     * Summary of charge
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function charge()
    {
        return $this->hasOne(Charge::class, 'id', 'charge_id');
    }

    public function trainingFees()
    {
        return $this->hasMany(CourseModuleFee::class, 'course_module_id', 'id');
    }

    public function moduleType()
    {
        return $this->hasOne(ModuleType::class, 'id', 'module_type_id');
    }


    public function facilitator()
    {
        return $this->hasMany(TrainingFacilitator::class, "course_module_id", "id");
    }

    public function certificates()
    {
        return $this->hasMany(MainCertificate::class, "course_module_id", "id");
    }
    // public function attendances()
    // {
    //     return $this->hasMany(Attendance::class, 'user_id', 'id', 'training_id');
    // }

    // public function attendance_records()
    // {
    //     return $this->hasMany(AttendanceRecord::class, 'user_id', 'id', 'attendance_id');
    // }

    /** Scopes */

    public function scopeForFacilitator()
    {
        return;
    }
}

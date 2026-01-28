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

    /**
     * TO BE REMOVED 🍆💦
     * Summary of charge
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function charge(){
        return $this->hasOne(Charge::class, 'id', 'charge_id');
    }

    public function trainingFees() {
        return $this->hasMany(CourseModuleFee::class, 'course_module_id', 'id');
    }

    public function moduleType() {
        return $this->hasOne(ModuleType::class, 'id', 'module_type_id');
    }

    public function facilitator()
    {
        return $this->hasMany(TrainingFacilitator::class, "course_module_id", "id");
    }
}

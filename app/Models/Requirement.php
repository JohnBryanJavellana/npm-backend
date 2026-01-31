<?php

namespace App\Models;

use App\Enums\RequestStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    use HasFactory;

    public function hasData () {
        return $this->hasMany(TrainingRequirement::class);
    }

    public function forModules () {
        return $this->hasMany(RequirementSpecificModule::class);
    }

    public function trainee_file()
    {
        return $this->hasMany(TrainingRegFile::class);
    }

    public function uploaded_specific_requirement()
    {
        return $this->hasMany(TraineeRequirement::class);
    }

    /** Scopes */
    public function scopeActive(Builder $query)
    {
        return $query->where("status", RequestStatus::ACTIVE->value);
    }

    public function scopeUserCountReq(Builder $query, $addtional_info_id)
    {
        return $query->whereHas("trainee_file", fn($q) => $q->forAddition($addtional_info_id));
    }

    public function scopeBasic(Builder $query)
    {
        return $query->where("isBasic", "YES");
    }

    public function scopeEachModuleRequirements(Builder $query, $course_module_id)
    {
        return $query->where(function($q) use ($course_module_id) {
            $q->whereRelation('forModules', 'course_module_id', '=', $course_module_id)
            ->orWhere("isBasic", "YES");
        });
    }
}

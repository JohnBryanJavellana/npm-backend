<?php

namespace App\Models;

use App\Enums\RequestStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessments extends Model
{
    use HasFactory;

    protected $guarded = ["id"];


    public function sections()
    {
        return $this->hasMany(AssessmentSection::class);
    }



    /** Scope */
    public function scopeForTraining(Builder $query, int $trainingId)
    {
        return $query->where("training_id", $trainingId);
    }
    public function scopeForModule(Builder $query, int $moduleId)
    {
        return $query->where("course_module_id", $moduleId);
<<<<<<< HEAD
=======
    }

    public function scopeActive(Builder $query)
    {
        return $query->where("status", RequestStatus::ACTIVE->value);       
    }

    public function scopeType(Builder $query, $type)
    {
        return $query->where("type", $type);
    }

    public function scopeViewAsTrainee(Builder $query)
    {
        return $query->where(["status" => RequestStatus::ACTIVE->value, "is_hidden" => false]);
    }

    public function scopeViewAsTrainer(Builder $query)
    {
        return $query->where("status", RequestStatus::ACTIVE->value);
>>>>>>> 4b0cf694bc16ed53c5b26640fbd1cecb1793231b
    }
}

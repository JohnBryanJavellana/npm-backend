<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessments extends Model
{
    use HasFactory;

    protected $guarded = ["id"];


    /** Scope */
    public function scopeForTraining(Builder $query, int $trainingId)
    {
        return $query->where("training_id", $trainingId);
    }
    public function scopeForModule(Builder $query, int $moduleId)
    {
        return $query->where("course_module_id", $moduleId);
    }
}

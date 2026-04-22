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

    public function attempts()
    {
        return $this->hasMany(AssessmentAttempt::class);
    }

    public function submittedAttempts()
    {
        return $this->hasMany(AssessmentAttempt::class, 'assessments_id')
            ->where('status', 'SUBMITTED');
    }

    public function course()
    {
        return $this->belongsTo(CourseModule::class, "created_by", "id");
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, "created_by", "id");
    }
    public function updated_by()
    {
        return $this->belongsTo(User::class, "updated_by", "id");
    }

    public function courseContent()
    {
        return $this->belongsTo(CourseContent::class, "course_content_id", "id");
    }


    /** Scope */
    public function scopeForTraining(Builder $query, int $trainingId)
    {
        return $query->where("training_id", $trainingId);
    }
    public function scopeForModule(Builder $query, int $moduleId)
    {
        return $query->where("course_module_id", $moduleId);
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
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentSection extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function assessment()
    {
        return $this->belongsTo(Assessments::class, "assessments_id", "id");
    }

    public function questions()
    {
        return $this->hasMany(AssessmentQuestion::class);
    }

        /** Scope */
    public function scopeForAssessment(Builder $query, $assessmentId)
    {
        return $query->where("assessments_id", $assessmentId);
    }
}

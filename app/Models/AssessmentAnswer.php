<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentAnswer extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function attempt()
    {
        return $this->belongsTo(AssessmentAttempt::class, "assessment_attempt_id", "id");
    }

    public function assessment_option()
    {
        return $this->hasOne(AssessmentOption::class, "id", "assessment_question_id");
    }
    public function assessment_question()
    {
        return $this->hasOne(AssessmentQuestion::class, "id", "assessment_question_id");
    }
}

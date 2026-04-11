<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentAnswer extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    //!PAOLO GYAP NAGADD WARAY GYAP RELATIONSHIP PAGKUHA HIN DATA HA ASSESSMENT ANSWER TO ASSESSMENT OPTION, ASSESSMENT QUESTION, ASSESSMENT ATTEMPT
    public function assessment_option()
    {
        return $this->belongsTo(AssessmentOption::class, 'assessment_option_id');
    }

    public function assessment_question()
    {
        return $this->belongsTo(AssessmentQuestion::class, 'assessment_question_id');
    }

    public function assessmentAttempt()
    {
        return $this->belongsTo(AssessmentAttempt::class, 'assessment_attempt_id');
    }
}

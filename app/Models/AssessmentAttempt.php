<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentAttempt extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function enrolled_course()
    {
        return $this->belongsTo(EnrolledCourse::class);
    }
<<<<<<< HEAD
=======
    //! PAOLO NAGADD WARAY PO RELATIONSHIP PAGKUHA HIN DATA HA ASSESSMENT ATTEMPT TO ASSESSMENT ANSWER
    public function answers()
    {
        return $this->hasMany(AssessmentAnswer::class, 'assessment_attempt_id');
    }

    public function assessment()
    {
        return $this->belongsTo(Assessments::class, 'assessments_id');
    }
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
}

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

    public function answers()
    {
        return $this->hasMany(AssessmentAnswer::class);
    }

    public function attempt(){
        return $this->hasOne(Assessments::class, "id", "assessments_id");
    }

    public function assessment(){
        return $this->hasOne(Assessments::class, "id", "assessments_id");
    }

    public function score($query){
        return $query->answers->sum('score');
    }

    public function gradedBy(){
        return $this->hasOne(User::class, "id", "graded_by");
    }
}

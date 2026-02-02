<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TraineeRequirement extends Model
{
    use HasFactory;

    // protected $guarded = ["id"];

    public function requirement () {
        return $this->hasOne(Requirement::class, 'id', 'requirement_id');
    }

    public function req()
    {
        return $this->belongsTo(Requirement::class);    
    }

    public function enrolled_course()
    {
        return $this->belongsTo(EnrolledCourse::class, 'enrolled_course_id', 'id');
    }
}

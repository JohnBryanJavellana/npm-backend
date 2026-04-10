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
}

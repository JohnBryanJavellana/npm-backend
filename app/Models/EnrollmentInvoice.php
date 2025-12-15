<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnrollmentInvoice extends Model
{
    public function training () {
        return $this->belongsTo(EnrolledCourse::class, 'enrolled_course_id', 'id');
    }
}

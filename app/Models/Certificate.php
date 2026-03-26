<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
     public function enrolled_course_certificates() {
        return $this->belongsTo(MainCertificate::class, 'main_certificate_id', 'id');
    }

    public function traineeEnrollment()
    {
        return $this->belongsTo(EnrolledCourse::class, "enrolled_course_id", "id");
    }
}

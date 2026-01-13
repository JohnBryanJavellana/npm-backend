<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnrollmentInvoice extends Model
{

    protected $guarded = ["id"];

    public function training () {
        return $this->belongsTo(EnrolledCourse::class, 'enrolled_course_id', 'id');
    }

    public function payee() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}

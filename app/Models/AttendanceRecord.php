<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceRecord extends Model
{
    use HasFactory;

    protected $guarded = ["id"];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function enrolled_course()
    {
        return $this->belongsTo(EnrolledCourse::class, 'enrolled_course_id', 'id');
    }

    public function attendance()
    {
        return $this->belongsTo(Attendance::class, 'attendance_id', 'id');
    }
}

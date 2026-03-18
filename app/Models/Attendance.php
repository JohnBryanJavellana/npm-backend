<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get the attendance records associated with the attendance.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attendance_records()
    {
        return $this->hasMany(AttendanceRecord::class, 'attendance_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // public function enrolled()
    // {
    //     return $this->belongsTo(EnrolledCourse::class, 'enrolled_course_id', 'id');
    // }
}

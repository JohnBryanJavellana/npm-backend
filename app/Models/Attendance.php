<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

/*************  ✨ Windsurf Command ⭐  *************/
/**
 * Get the attendance records associated with the attendance.
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
/*******  add055e4-341f-407f-904b-2406e85551e5  *******/
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

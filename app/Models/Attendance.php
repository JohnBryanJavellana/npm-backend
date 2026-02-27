<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AttendanceRecord;
use App\Models\Module;


class Attendance extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'training_id', 'user_id', 'training_date', 'created_at', 'updated_at'];

    public function attendance_records()
    {
        return $this->hasMany(AttendanceRecord::class, 'attendance_id', 'id');
    }
    public function module()
    {
        return $this->belongsTo(EnrolledCourse::class, 'user', 'id', 'enrolled_course_status');
    }
}

<?php

namespace App\Models;

use App\Enums\RequestStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class EnrolledCourse extends Model
{

    protected $guarded = ["id"];

    /** RELATIONS */
    public function enrolled_course_certificate()
    {
        return $this->hasMany(Certificate::class);
    }

    public function trainee()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function training()
    {
        return $this->hasOne(Training::class, 'id', 'training_id');
    }

    public function trainee_requirement()
    {
        return $this->hasMany(TraineeRequirement::class);
    }

    public function invoices()
    {
        return $this->hasMany(EnrollmentInvoice::class);
    }

    public function invoice()
    {
        return $this->hasOne(EnrollmentInvoice::class, 'enrolled_course_id', 'id');
    }

    public function traineeAttendanceRecord() {
        return $this->hasMany(AttendanceRecord::class);
    }

    /** SCOPES */
    public function scopeForUser($query, $user_id)
    {
        return $query->where('user_id', $user_id);
    }

    public function scopeStatus($query, $status)
    {
        return $query->whereIn("enrolled_course_status", $status);
    }

    public function scopeEnrolled($query)
    {
        return $query->where("enrolled_course_status", RequestStatus::ENROLLED->value);
    }

    public function scopeForTraining(Builder $query, $trainingId)
    {
        return $query->where("training_id", $trainingId);
    }
}

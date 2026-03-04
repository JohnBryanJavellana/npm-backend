<?php

namespace App\Models;

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

    /** SCOPES */
    public function scopeForUser($query, $user_id)
    {
        return $query->where('user_id', $user_id);
    }

    public function scopeStatus($query, $status)
    {
        return $query->whereIn("enrolled_course_status", $status);
    }
    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
/*************  ✨ Windsurf Command ⭐  *************/
/*******  5cab501c-730c-4b36-bf5b-2965eb639c1c  *******/
    public function scopeForTraining(Builder $query, $trainingId)
    {
        return $query->where("training_id", $trainingId);
    }
}

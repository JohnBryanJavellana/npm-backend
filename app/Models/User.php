<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasFactory, Notifiable;

    public function sendEmailVerificationNotification()
    {
        $this->notify(new \App\Notifications\CustomVerifyEmailNotification);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function trainee_library()
    {
        return $this->hasMany(BookRes::class, "user_id", "id");
    }
    public function additional_trainee_info()
    {
        return $this->hasOne(AdditionalTraineeInfo::class, 'user_id', 'id');
    }

    public function trainee_dormitory()
    {
        return $this->hasMany(DormitoryTenant::class, 'user_id', 'id');
    }

    public function trainee_enrolled_courses()
    {
        return $this->hasMany(EnrolledCourse::class);
    }

    public function latest_trainee_enrolled_courses()
    {
        return $this->hasOne(EnrolledCourse::class)->where('enrolled_course_status', 'ENROLLED')->latestOfMany('training_schedule_id');
    }

    public function hasData()
    {
        return $this->hasMany(AuditTrail::class);
    }

    public function userRecreationals()
    {
        return $this->hasMany(RARequestInfo::class);
    }

    public function assessmentAttempts()
    {
        return $this->hasMany(AssessmentAttempt::class, 'created_by', 'id');
    }

    // public function creditAmount () {
    //     return $this->hasMany(Credit::class);
    // }

    public function asFacilitator()
    {
        return $this->hasMany(TrainingFacilitator::class);
        /*************  ✨ Windsurf Command ⭐  *************/
        /**
         * Returns all attendance records of the user.
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        /*******  f7fe3445-6c22-4848-acad-4be691535ab1  *******/
    }

    public function attendanceTraining()
    {
        return $this->hasMany(AttendanceRecord::class);
    }

    public function trainee_enrolled_invoices()
    {
        return $this->hasManyThrough(
            EnrollmentInvoice::class,
            EnrolledCourse::class,
            'user_id',
            'enrolled_course_id',
            'enrolled_course_status',

        );
    }

    public function trainee_dormitory_invoices()
    {
        return $this->hasManyThrough(
            DormitoryInvoice::class,
            DormitoryTenant::class,
            'user_id',
            'dormitory_tenant_id',
        );
    }

    public function library_invoices()
    {
        return $this->hasMany(LibraryInvoice::class);
    }

    public function dormitory_invoices()
    {
        return $this->hasMany(DormitoryInvoice::class);
    }

    public function enrollment_invoices()
    {
        return $this->hasMany(EnrollmentInvoice::class);
    }

    public function recreational_invoices()
    {
        return $this->hasMany(RAInvoices::class);
    }

    /** Scopes */

    public function scopeForUser($query, $user_id)
    {
        return $query->whereKey($user_id);
    }
}

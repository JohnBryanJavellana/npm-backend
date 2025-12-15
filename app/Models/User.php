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

    public function additional_trainee_info() {
        return $this->hasOne(AdditionalTraineeInfo::class, 'user_id', 'id');
    }

    public function trainee_dormitory()  {
        return $this->hasMany(DormitoryTenant::class, 'user_id', 'id');
    }

    public function trainee_enrolled_courses() {
        return $this->hasMany(EnrolledCourse::class);
    }

    public function latest_trainee_enrolled_courses() {
        return $this->hasOne(EnrolledCourse::class)->where('enrolled_course_status', 'ENROLLED')->latestOfMany('training_schedule_id');
    }

    public function hasData () {
        return $this->hasMany(AuditTrail::class);
    }

    public function trainee_enrolled_invoices() {
        return $this->hasManyThrough(
            EnrollmentInvoice::class,
            EnrolledCourse::class,
            'user_id',
            'enrolled_course_id',
        );
    }

    public function trainee_dormitory_invoices() {
        return $this->hasManyThrough(
            DormitoryInvoice::class,
            DormitoryTenant::class,
            'user_id',
            'user_id',
        );
    }

    public function scopeForUser($query, $user_id)
    {
        return $query->where('id', $user_id);
    }
}

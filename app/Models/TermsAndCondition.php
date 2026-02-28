<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermsAndCondition extends Model
{
    use HasFactory;

    public function editor() {
        return $this->hasOne(User::class, 'updated_by', 'id');
    }

    public function userSignedRAInvoices() {
        return $this->hasMany(RAInvoices::class);
    }

    public function userSignedEnrollmentInvoice() {
        return $this->hasMany(EnrollmentInvoice::class);
    }

    public function userSignedLibraryInvoice() {
        return $this->hasMany(LibraryInvoice::class);
    }

    public function userSignedDormitoryInvoice() {
        return $this->hasMany(DormitoryInvoice::class);
    }

    public function userSignedBookRes() {
        return $this->hasMany(BookRes::class);
    }

    public function userSignedDormitoryTenant() {
        return $this->hasMany(DormitoryTenant::class);
    }

    public function userSignedEnrolledCourse() {
        return $this->hasMany(EnrolledCourse::class);
    }

    public function userSignedRARequestInfo() {
        return $this->hasMany(RARequestInfo::class);
    }
}

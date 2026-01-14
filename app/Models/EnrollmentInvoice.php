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

    public function orNumber(){
        return $this->hasOne(CashierOR::class, 'id', 'cashier_o_r_id');
    }

    /** Scopes */
    public function scopeForUser($query, $userId)
    {
        return $query->where("user_id", $userId);
    }
}

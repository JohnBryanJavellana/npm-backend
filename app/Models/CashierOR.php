<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashierOR extends Model
{
    use HasFactory;

    public function connectionInLibrary() {
        return $this->hasMany(LibraryInvoice::class);
    }

    public function connectionInDormitory() {
        return $this->hasMany(DormitoryInvoice::class);
    }

    public function connectionInEnrollment() {
        return $this->hasMany(EnrollmentInvoice::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashierOR extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = "cashier_o_r_s";

    public function category() {
        return $this->hasOne(ChargeCategory::class, 'id', 'charge_category_id');
    }

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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryInvoice extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function payee() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }


    public function bookRes () {
        return $this->belongsTo(BookRes::class, 'book_res_id', 'id');
    }

    // public function feeCategory () {
    //     return $this->belongsTo(TrainingFeeCategory::class, 'training_fee_category_id', 'id');
    // }

    public function charge ()
    {
        return $this->hasOne(Charge::class, 'id', 'charge_id');
    }

    public function selectedBooks () {
        return $this->hasMany(LISelectedBook::class);
    }

    public function orNumber(){
        return $this->hasOne(CashierOR::class, 'id', 'cashier_o_r_id');
    }

    /**
     * SCOPES
     */


    public function scopeForUser($query, $userId)
    {
        return $query->where("user_id", $userId);
    }

    public function scopeByTraceId($query, $traceNum, $inv_id)
    {
        return $query->whereKey($inv_id)->where("trace_number", $traceNum);
    }
}

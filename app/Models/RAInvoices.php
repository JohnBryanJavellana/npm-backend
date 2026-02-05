<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RAInvoices extends Model
{
    use HasFactory;

    public function cashier_or() {
        return $this->hasOne(CashierOR::class);
    }
}

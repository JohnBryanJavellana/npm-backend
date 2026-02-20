<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RAInvoices extends Model
{
    use HasFactory;
    
    protected $table = 'r_a_invoices'; 
    
    protected $fillable = [
        'r_a_request_info_id',
        'user_id',
        'description',
        'trace_number',
        'invoice_status',
        'created_at',
        'updated_at',
    ];

    public function cashier_or() {
        return $this->hasOne(CashierOR::class);
    }

    public function payee() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}

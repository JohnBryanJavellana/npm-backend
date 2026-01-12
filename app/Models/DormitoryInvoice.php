<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DormitoryInvoice extends Model
{
    protected $guarded = ["id"];

    public function trainee() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function payee() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function room() {
        return $this->hasOne(DormitoryRoom::class, 'id', 'dormitory_room_id');
    }

    public function tenant() {
        return $this->hasOne(DormitoryTenant::class, 'id', 'dormitory_tenant_id');
    }

    public function charge()
    {
        return $this->belongsTo(Charge::class);
    }

    public function orNumber(){
        return $this->hasOne(CashierOR::class, 'id', 'cashier_o_r_id');
    }

    /**
     * Scopes
     */

    public function scopeForUser($query, $userId)
    {
        return $query->where("user_id", $userId);
    }
}

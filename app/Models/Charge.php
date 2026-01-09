<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    use HasFactory;

    public function chargeCategory() {
        return $this->hasOne(ChargeCategory::class, 'id', 'charge_category_id');
    }
}

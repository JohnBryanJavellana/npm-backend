<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DormitoryExtendRequest extends Model
{
    use HasFactory;


    public function tenant()
    {
        return $this->hasOne(DormitoryTenant::class, 'id', 'dormitory_tenant_id');
    }
}

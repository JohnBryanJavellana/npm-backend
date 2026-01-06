<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DormitoryExtensionRequest extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function tenant()
    {
        return $this->belongsTo(DormitoryTenant::class);
    }
}

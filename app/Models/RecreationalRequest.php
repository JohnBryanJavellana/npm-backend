<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecreationalRequest extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function facilities()
    {
        return $this->belongsTo(RecreationalRequest::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingScheduleAnnouncement extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function trainer() {
        return $this->hasOne(User::class, 'id', 'trainer');
    }
}

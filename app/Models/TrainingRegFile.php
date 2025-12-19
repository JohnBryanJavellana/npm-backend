<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingRegFile extends Model
{
    use HasFactory;

    public function requirement() {
        return $this->belongsTo(Requirement::class, 'requirement_id', 'id');
    }

    public function additional_info()
    {
        return $this->belongsTo(AdditionalTraineeInfo::class, 'additional_trainee_info_id', 'id');
    }
}

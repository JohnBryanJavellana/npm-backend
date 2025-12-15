<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingRequirement extends Model
{
    use HasFactory;

    public function requirement() {
        return $this->belongsTo(Requirement::class , "requirement_id", "id");
    }

}

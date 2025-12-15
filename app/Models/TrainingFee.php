<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingFee extends Model
{
    use HasFactory;

    public function category() {
        return $this->belongsTo(TrainingFeeCategory::class, 'training_fee_category_id', 'id');
    }

    public function module() {
        return $this->hasOne(CourseModule::class, 'id', 'course_module_id');
    }
}

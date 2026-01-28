<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModuleFee extends Model
{
    use HasFactory;

    public function module() {
        return $this->hasOne(CourseModule::class, 'id', 'course_module_id');
    }

    public function category() {
        return $this->hasOne(ChargeCategory::class, 'id', 'charge_category_id');
    }
}

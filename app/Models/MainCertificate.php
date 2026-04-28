<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainCertificate extends Model
{
    protected $guarded = ['id'];

    public function hasData() {
        return $this->hasMany(Certificate::class);
    }

    public function module () {
        return $this->hasOne(CourseModule::class, 'id', 'course_module_id');
    }
}

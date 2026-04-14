<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainCourse extends Model
{
    protected $guarded = ['id'];

    public function hasData() {
        return $this->hasMany(EducationalAttainment::class);
    }
}

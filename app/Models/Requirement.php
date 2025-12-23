<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    use HasFactory;

    public function hasData () {
        return $this->hasMany(TrainingRequirement::class);
    }

    public function forModules () {
        return $this->hasMany(RequirementSpecificModule::class);
    }

    public function trainee_file()
    {
        return $this->hasMany(TrainingRegFile::class);
    }

    public function uploaded_specific_requirement()
    {
        return $this->hasMany(TraineeRequirement::class);
    }
}

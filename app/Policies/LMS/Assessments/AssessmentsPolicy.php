<?php

namespace App\Policies\LMS\Assessments;

use App\Models\Assessments;
use App\Models\User;

class AssessmentsPolicy
{
    /**
     * Create a new policy instance.
     */

    public function view(User $user, Assessments $assessments)
    {
        return;
    }

    public function create(User $user)
    {
        return true;
    }

}

<?php

namespace App\Http\Controllers\Authenticated\Trainer\Handouts;

use App\Services\Trainer\LMS\TrainerHandout\LMSHandoutService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LMSHandoutController extends Controller
{
    public function __construct(
        protected LMSHandoutService $lMSHandoutService
    ) {}

    public function handoutsByCourseModule(Request $request)
    {
        return;
    }



}

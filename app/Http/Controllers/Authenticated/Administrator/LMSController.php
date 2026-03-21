<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\LMS\storeLmsCourseSectionRequest;
use App\Services\LMS\LMSCourseService;
use Illuminate\Http\Request;

class LMSController extends Controller
{
    public function __construct(
        protected LMSCourseService $lmsCourseService
    ){}

    public function create(storeLmsCourseSectionRequest $request)
    {
        return $this->lmsCourseService->storeCourseSections($request->validated());
    }
}

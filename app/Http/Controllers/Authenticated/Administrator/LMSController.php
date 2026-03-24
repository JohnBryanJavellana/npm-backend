<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\LMS\storeLmsCourseSectionRequest;
use App\Http\Resources\Trainer\LMS\ViewCoursesResource;
use App\Services\LMS\LMSCourseService;
use Illuminate\Http\Request;

class LMSController extends Controller
{

    /**
     * 
     * ADDITIONAL ADMIN ROLE === ADMIN-LMS
     * 
     */


    /**
     * Summary of __construct
     * @param LMSCourseService $lmsCourseService
     */
    public function __construct(
        protected LMSCourseService $lmsCourseService
    ) {}

    public function view(Request $request)
    {
        try {
            return $this->lmsCourseService->getCourseModules($request->course_module_id, $request->section_id);
        } catch (\Exception $e) {
        }
    }

    public function create(storeLmsCourseSectionRequest $request)
    {
        try {
            return $this->lmsCourseService->storeCourseSections($request->validated());
        } catch (\Exception $e) {
            \Log::error("sectionStore", [$e->getMessage()]);
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    

    public function updateCouseSections(Request $request)
    {
        try {
            return $this->lmsCourseService->updateCourseSections($request->all());
        } catch (\Exception $e) {
           
            throw $e;
        } catch (\Exception $e) {
            \Log::error("sectionUpdate", [$e->getMessage()]);
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    public function updateCourseSectionContent(Request $request)
    {
        try {
            return $this->lmsCourseService->updateCourseSectionContent($request->all());
        } catch (\Exception $e) {
            \Log::error("sectionContentUpdate", [$e->getMessage()]);
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }
}

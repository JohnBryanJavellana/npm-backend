<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\LMS\removeLmsCourseSectionRequest;
use App\Http\Requests\LMS\storeLmsCourseSectionRequest;
use App\Http\Requests\LMS\updateLmsContentParentRequest;
use App\Http\Requests\LMS\updateLmsCourseContentRequest;
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
    ){}

    public function view(Request $request)
    {
        try
        {
            return $this->lmsCourseService->getCourseModules($request->course_module_id, $request->section_id);            
        }
        catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    public function create(storeLmsCourseSectionRequest $request)
    {
        try
        {
            $this->lmsCourseService->storeCourseSections($request->validated(), $request->user()->id);
            return response()->json(["message" => "Course content created successfully."], 201);
        }
        catch (\Exception $e) {
            \Log::error("sectionStore", [$e->getMessage()]);
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    public function updateForContentParent(updateLmsContentParentRequest $request)
    {
        try
        {
            $this->lmsCourseService->updateCourseContentParent($request->validated(), $request->user()->id);            
            return response()->json(["mesgsage" => "Course content updated successfully."], 200);
        }
        catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    public function updateForContent(updateLmsCourseContentRequest $request)
    {
        try
        {
            $this->updateForContent($request->validated());
            return response()->json(["message" => "Course content updated successfully."], 200);
        }
        catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    public function delete(removeLmsCourseSectionRequest $request)
    {
        try
        {
            $this->lmsCourseService->deleteCourseContent($request->validated());            
            return response()->json(["message" => "Course content deleted successfully."], 204);
        }
        catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }
}

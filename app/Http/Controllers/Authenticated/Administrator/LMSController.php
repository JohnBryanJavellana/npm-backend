<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\LMS\removeLmsCourseSectionRequest;
use App\Http\Requests\LMS\storeCourseContentRequest;
use App\Http\Requests\LMS\storeLmsCourseSectionRequest;
use App\Http\Requests\LMS\updateLmsContentParentRequest;
use App\Http\Requests\LMS\updateLmsCourseContentRequest;
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
        try
        {
            $courseId = $request->course_module_id ?? null;
            $sectionId = $request->section_id ?? null;
            return $this->lmsCourseService->getCourseModules($courseId, $sectionId);            
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
            return response()->json(["message" => "Course section created successfully."], 201);
        }
        catch (\Exception $e) {
            \Log::error("sectionStore", [$e->getMessage()]);
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    public function createSectionContents(storeCourseContentRequest $request)
    {
        $this->lmsCourseService->storeCourseContent($request->validated());
        return response()->json(["Course content created successfully."], 200);
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
            $this->lmsCourseService->updateCourseContent($request->validated());
            return response()->json(["message" => "Course content updated successfully."], 200);
        }
        catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    public function deleteUpload(Request $request)
    {
        try
        {
            $fileId = $request->input("file_id");
            $this->lmsCourseService->deteleContentUpload($fileId);     
            return response()->json(["message" => "Course file deleted successfully."], 204);   
        }
        catch (\Exception $e) {
        }
    }

    public function delete(removeLmsCourseSectionRequest $request)
    {
        try
        {
            $this->lmsCourseService->deleteCourseSections($request->validated());            
            return response()->json(["message" => "Course content deleted successfully."], 204);
        }
        catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }
}

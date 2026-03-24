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



    public function updateCourseSections(Request $request)
    {
        \Log::info("updateCourseSections", [$request->input()]);

        try {
            $validated = validator($request->input(), [
                "id" => "required|exists:course_module_sections,id",
                "day_number" => "required|integer",
                "label" => "required|string",
            ])->validate();

            if ($validated) {
                return $this->lmsCourseService->updateCourseSections($validated, $request->user()->id);
            }
        } catch (\Exception $e) {

            \Log::error("sectionUpdate", [$e->getMessage()]);

            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    public function updateCourseSectionContent(Request $request)
    {
        try {
            $validated = validator($request->input(), [
                "id" => "required|exists:course_contents,id",
                "title" => "required|string",
                "description" => "required|string",
                "status" => "required|in:ACTIVE,INACTIVE"
            ])->validate();
            if ($validated) {
                return $this->lmsCourseService->updateCourseSectionContent($request, $validated, $request->user()->id);
            }
        } catch (\Exception $e) {

            \Log::error("sectionContentUpdate", [$e->getMessage()]);

            return response()->json(["message" => $e->getMessage()], 500);
        }
    }
    public function deleteCourseContentUploads(Request $request)
    {
        try {
            $validated = validator($request->input(), [
                "id" => "required|exists:uploads,id",
                "course_content_id" => "required|exists:course_contents,id",
                "filepath" => "required|string"
            ])->validate();
            if ($validated) {
                return $this->lmsCourseService->deleteCourseContentUploads($request, $validated, $request->user()->id);
            }
        } catch (\Exception $e) {
            \Log::error("uploadDelete", [$e->getMessage()]);
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }
}

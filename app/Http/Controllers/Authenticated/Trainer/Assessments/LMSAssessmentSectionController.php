<?php

namespace App\Http\Controllers\Authenticated\Trainer\Assessments;

use App\Enums\LMS\AssessmentSectionResponseMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\Trainer\LMS\createAssSectionRequest;
use App\Http\Requests\Trainer\LMS\updateAssSectionRequest;
use App\Models\AssessmentSection;
use App\Services\Trainer\LMS\Assessments\LMSAssSectionService;
use DomainException;
use Illuminate\Http\Request;

class LMSAssessmentSectionController extends Controller
{
    public function __construct(
        protected LMSAssSectionService $lMSAssSectionService
    ){}

    public function view(Request $request, $assessmentId)
    {
        return $this->lMSAssSectionService->getAssessmentSectionsById($assessmentId);
    }

    public function create(createAssSectionRequest $request)
    {
        try
        {
            $this->lMSAssSectionService->storeAssessmentSection($request->validated());
            return response()->json(["message" => AssessmentSectionResponseMessage::CREATED->value], 201);
        }
        catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    public function update(updateAssSectionRequest $request)
    {
        try
        {            
            $this->lMSAssSectionService->updateAssessmentSection($request->validated());
            return response()->json(["message" => AssessmentSectionResponseMessage::UPDATED->value], 202);
        }
        catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
            return response()->json(["message" => AssessmentSectionResponseMessage::SERVER_ERROR->value], 500);
        }
    }

    public function delete(Request $request)
    {
        try
        {
            $this->lMSAssSectionService->deleteAssessmentSection($request->section);
            return response()->json(["message" => AssessmentSectionResponseMessage::DELETED->value], 200);
        }
        catch (DomainException $e) {
            throw $e;
        }
        catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
            return response()->json(["message" => AssessmentSectionResponseMessage::SERVER_ERROR->value], 500);
        }
    }
}

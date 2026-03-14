<?php

namespace App\Services\Trainer\LMS\Assessments;

use App\Models\AssessmentSection;
use DomainException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LMSAssSectionService {
    public function __construct(
        protected AssessmentSection $assessmentSectionModel
    ){}

    public function getAssessmentSectionsById($assessmentId)
    {
        return $this->assessmentSectionModel->query()
        ->forAssessment($assessmentId)
        ->get();
    }

    public function storeAssessmentSection($validated)
    {
        return DB::transaction(function() use ($validated){
            return $this->assessmentSectionModel->query()
            ->create($validated);
        });
    } 

    public function updateAssessmentSection($validated)
    {
        return DB::transaction(function() use ($validated){
            return $this->assessmentSectionModel->query()
            ->forAssessment($validated["assessments_id"])
            ->update([
                ...collect($validated)->only([
                    'title',
                    'instruction',
                    'status'
                ])->toArray(),
            ]);
        });
    }

    public function deleteAssessmentSection($section)
    {
        $record = $this->assessmentSectionModel->query()
        ->with(["assessment"])
        ->whereKey($section)
        ->first();
        $userId = $record->assessment->created_by;

        if($userId !== Auth::id()) {
            throw new DomainException("You are not authorized to perform this action on the section.");
        }

        $record->delete();
    }
}
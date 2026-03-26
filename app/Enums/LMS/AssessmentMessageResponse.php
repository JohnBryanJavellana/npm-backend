<?php

namespace App\Enums\LMS;

enum AssessmentMessageResponse: string 
{
      // ─── CREATE ────────────────────────────────────────────────────────────────
    case CREATED          = 'Assessment created successfully.';
    case CREATE_FAILED    = 'Failed to create the assessment. Please try again.';
    case CREATE_DUPLICATE = 'An assessment with the same title already exists for this period.';
 
    // ─── UPDATE ────────────────────────────────────────────────────────────────
    case UPDATED          = 'Assessment updated successfully.';
    case UPDATE_FAILED    = 'Failed to update the assessment. Please try again.';
    case UPDATE_NO_CHANGE = 'No changes were detected. The assessment was not modified.';
 
    // ─── DELETE ────────────────────────────────────────────────────────────────
    case DELETED          = 'Assessment deleted successfully.';
    case DELETE_FAILED    = 'Failed to delete the assessment. Please try again.';
    case DELETE_HAS_SUBMISSIONS = 'Cannot delete an assessment that has existing submissions.';
 
    // ─── GENERAL ───────────────────────────────────────────────────────────────
    case NOT_FOUND        = 'Assessment not found.';
    case UNAUTHORIZED     = 'You are not authorized to perform this action on the assessment.';
    case VALIDATION_ERROR = 'The provided data is invalid. Please check your inputs.';
    case SERVER_ERROR     = 'An unexpected server error occurred. Please contact support.';
}
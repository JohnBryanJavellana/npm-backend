<?php

namespace App\Enums\LMS;

enum AssessmentSectionResponseMessage: string
{
     // ─── CREATE ────────────────────────────────────────────────────────────────
    case CREATED          = 'Assessment section created successfully.';
    case CREATE_FAILED    = 'Failed to create the assessment section. Please try again.';
    case CREATE_DUPLICATE = 'A section with the same title already exists in this assessment.';
 
    // ─── UPDATE ────────────────────────────────────────────────────────────────
    case UPDATED          = 'Assessment section updated successfully.';
    case UPDATE_FAILED    = 'Failed to update the assessment section. Please try again.';
    case UPDATE_NO_CHANGE = 'No changes were detected. The section was not modified.';
 
    // ─── DELETE ────────────────────────────────────────────────────────────────
    case DELETED              = 'Assessment section deleted successfully.';
    case DELETE_FAILED        = 'Failed to delete the assessment section. Please try again.';
    case DELETE_HAS_QUESTIONS = 'Cannot delete a section that still has questions. Remove all questions first.';
 
    // ─── REORDER ───────────────────────────────────────────────────────────────
    case REORDERED        = 'Assessment sections reordered successfully.';
    case REORDER_FAILED   = 'Failed to reorder the assessment sections. Please try again.';
 
    // ─── GENERAL ───────────────────────────────────────────────────────────────
    case NOT_FOUND        = 'Assessment section not found.';
    case ASSESSMENT_NOT_FOUND = 'The parent assessment was not found.';
    case UNAUTHORIZED     = 'You are not authorized to perform this action on the section.';
    case VALIDATION_ERROR = 'The provided section data is invalid. Please check your inputs.';
    case SERVER_ERROR     = 'An unexpected server error occurred. Please contact support.';
}
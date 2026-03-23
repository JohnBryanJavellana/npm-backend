<?php

namespace App\Enums\LMS;

enum AssessmentHandoutResponseMessage: string
{
    // ─── CREATE ────────────────────────────────────────────────────────────────
    case CREATED          = 'Handout uploaded successfully.';
    case CREATE_FAILED    = 'Failed to upload the handout. Please try again.';
    case CREATE_DUPLICATE = 'A handout with the same filename already exists in this assessment.';

    // ─── UPDATE ────────────────────────────────────────────────────────────────
    case UPDATED          = 'Handout updated successfully.';
    case UPDATE_FAILED    = 'Failed to update the handout. Please try again.';
    case UPDATE_NO_CHANGE = 'No changes were detected. The handout was not modified.';

    // ─── DELETE ────────────────────────────────────────────────────────────────
    case DELETED       = 'Handout deleted successfully.';
    case DELETE_FAILED = 'Failed to delete the handout. Please try again.';

    // ─── FILE HANDLING ─────────────────────────────────────────────────────────
    case FILE_TOO_LARGE      = 'The uploaded file exceeds the maximum allowed size.';
    case FILE_TYPE_INVALID   = 'The file type is not supported. Please upload a valid document.';
    case FILE_UPLOAD_FAILED  = 'The file could not be stored. Please try again.';
    case FILE_NOT_FOUND      = 'The handout file could not be found on the server.';

    // ─── GENERAL ───────────────────────────────────────────────────────────────
    case NOT_FOUND            = 'Handout not found.';
    case ASSESSMENT_NOT_FOUND = 'The parent assessment was not found.';
    case UNAUTHORIZED         = 'You are not authorized to perform this action on the handout.';
    case VALIDATION_ERROR     = 'The provided handout data is invalid. Please check your inputs.';
    case SERVER_ERROR         = 'An unexpected server error occurred. Please contact support.';
}
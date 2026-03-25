<?php

use App\Http\Controllers\Authenticated\Trainer\AnnouncementController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Broadcast;

/** guest controllers */

use App\Http\Controllers\Guest\{
    LoginController,
    RegisterController,
    ForgotPasswordController,
    EmailVerificationController
};

/** trainee controllers */

use App\Http\Controllers\Authenticated\Trainee\{
    MyAccount,
    TraineeDormitory,
    TraineeCourses,
    TraineeEnrollment,
    TraineeLibrary,
    TraineeInvoices,
    CsmsController,
    TraineeRecreational,
    TraineeDashboardController
};

/** administrator controllers */

use App\Http\Controllers\Authenticated\Administrator\{
    Account,
    LMSController,
    NotificationCtrl,
};

/** other controllers */

use App\Http\Controllers\Authenticated\Logout;
use App\Http\Controllers\Authenticated\QrReader\QrReaderController;
use App\Http\Controllers\Authenticated\Trainer\Assessments\LMSAssessmentController;
use App\Http\Controllers\Authenticated\Trainer\Assessments\LMSAssessmentQuestionController;
use App\Http\Controllers\Authenticated\Trainer\Assessments\LMSAssessmentSectionController;
use App\Http\Controllers\Authenticated\Trainer\AttendanceController;
use App\Http\Controllers\Authenticated\Trainer\Handouts\LMSHandoutController;
use App\Http\Controllers\Authenticated\Trainer\TrainerEnrollmentController;

/** imported models */

use App\Models\User;

/** guest routes */
Route::match(['GET', 'POST'], '/login', [LoginController::class, 'login_user']);
Route::post('/register', [RegisterController::class, 'register_user']);
Route::get('/email/verify', [EmailVerificationController::class, 'verify'])->middleware(['signed', 'throttle:6,1'])->name('verification.verify');
Route::post('/forgot-password', [ForgotPasswordController::class, 'forgotPassword']);
Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword']);

/** authenticated routes */
Route::middleware(['auth:sanctum', 'throttle:60,1'])->group(function () {
    Route::post('/broadcasting/auth', function (Request $request) {
        return Broadcast::auth($request);
    });

    /** current user */
    Route::post('/user', function (Request $request) {
        $user = User::where('id', $request->incomingId ?? $request->user()->id);

        if ($user && $request->user()->role === "TRAINEE") {
            $user->withCount('trainee_enrolled_courses')
                ->with([
                    'additional_trainee_info.general_info',
                    'additional_trainee_info.contact',
                    'additional_trainee_info.latest_shipboard_attainment',
                    'additional_trainee_info.trainee_registration_file',
                    'additional_trainee_info.trainee_registration_file.requirement',
                ]);
        }
        return response()->json(['user' => $user->first()]);
    });

    Route::middleware('user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT')->group(function () {
        Route::prefix('/my-account/')->group(function () {
            Route::post('create_or_update_additional_info', [MyAccount::class, 'create_or_update_additional_info']);
            Route::post('upload_profile_picture', [MyAccount::class, 'upload_profile_picture']);
            Route::get('get_trainee_general_info/{user}', [MyAccount::class, 'get_trainee_general_info']);
            Route::post('update_password', [Account::class, 'update_password']);
            Route::get('get_activities', [Account::class, 'getUserActivities']);
            Route::get('get_all_courses_and_schools', [MyAccount::class, 'get_all_courses_and_schools']);
            Route::get('get_all_requirements', [MyAccount::class, '']);
            Route::get("dropdown_values", [TraineeEnrollment::class, "viewRanksLicenses"]);
        });

        Route::prefix('/dashboard')->group(function () {
            Route::get("/schedules", [TraineeDashboardController::class, "viewCalendarSchedules"]);
            Route::get("/invoices", [TraineeDashboardController::class, "viewAllInvoices"]);
        });

        Route::prefix('/enrollment/')->group(function () {
            Route::match(["GET", "POST"], 'get_requirements/{module}', [TraineeEnrollment::class, 'view_module_requirements_v2']);
            Route::post('remove_training_request/{course}', [TraineeEnrollment::class, 'remove_training_request']);
            Route::match(['POST', 'GET'], 'get_available_trainings', [TraineeEnrollment::class, 'get_available_trainings']);
            Route::post('send_enrollment_request', [TraineeEnrollment::class, 'send_enrollment_request']);
            Route::post('send_training_requirements', [TraineeEnrollment::class, 'send_training_requirements']);
            Route::post('update_enrollment_request', [TraineeEnrollment::class, 'update_requirements_request']);
            Route::post('update_invoice_trainings', [TraineeEnrollment::class, 'update_invoice_trainings']);
            Route::post('get_all_trainee_invoices_two', [TraineeEnrollment::class, 'get_all_trainee_invoices_two']);
            Route::post('get_applications', [TraineeEnrollment::class, 'get_applications']);
            Route::post('get_applications/{course}', [TraineeEnrollment::class, 'get_application']);
            Route::post('change_card_color', [TraineeEnrollment::class, 'change_card_color']);
            Route::post("course_modules", [TraineeEnrollment::class, 'getCourseModule']);
            Route::get("counts", [TraineeEnrollment::class, 'viewEnrolledCount']);
        });

        Route::prefix('/trainings/')->group(function () {
            Route::get('get_all_courses', [TraineeCourses::class, 'get_all_courses']);
            // Route::get('get_trainees_enrollment_status', [EnrollmentCtrl::class, 'get_all_schedules']);
            Route::get('get_trainee_trainings', [TraineeCourses::class, 'get_trainee_courses']);
        });

        Route::prefix('/dormitories/')->group(function () {
            Route::post('rooms', [TraineeDormitory::class, 'viewRecommendedRooms']);
            Route::get('counts', [TraineeDormitory::class, 'viewTenantCount']);
            Route::post('applied_dormitories', [TraineeDormitory::class, 'view_room_application']);
            Route::get('applied_dormitories/view/{dormitory_id}', [TraineeDormitory::class, 'view_applied_dormitories']);
            Route::get('remove_applied_dormitories/{dormitory_id}', [TraineeDormitory::class, 'remove_applied_dormitories']);
            Route::get('check_pending_request', [TraineeDormitory::class, 'check_pending_request']);
            Route::get('get_personal_dormitory', [TraineeDormitory::class, 'get_personal_dormitory']);
            Route::post('request_tenant_room', [TraineeDormitory::class, 'request_tenant_room']);
            Route::post('update_status_dormitory', [TraineeDormitory::class, 'update_status_dormitory']);
            Route::get('dormitory_record', [TraineeDormitory::class, 'dormitory_record']);
            Route::get('applied_dormitories/view/{dormitory_id}/inclusions', [TraineeDormitory::class, 'view_inclusion']);
            Route::get('inclusion/requests/{dormitory_id}', [TraineeDormitory::class, 'view_inclusion_request']);
            Route::get('inclusion/view', [TraineeDormitory::class, 'view_available_items']);
            Route::post("inclusion/create", [TraineeDormitory::class, 'request_inclusion']);
            Route::post("inclusion/cancel", [TraineeDormitory::class, 'cancel_request_inclusion']);
            Route::get('services', [TraineeDormitory::class, 'view_service']);
            Route::get('services/{document_id}', [TraineeDormitory::class, 'user_service_request']);
            Route::post('services/{document_id}/create', [TraineeDormitory::class, 'create_service_request'])->whereNumber("document_id");
            Route::post('services/{document_id}/cancel', [TraineeDormitory::class, 'cancel_service_request'])->whereNumber("document_id");
            Route::get('applied_dormitories/view/getAllHistories/{dormitory_id}', [TraineeDormitory::class, 'applied_dormitory_histories']);
            Route::post('dormitory_payment_request', [TraineeDormitory::class, 'update_dorm_invoice']);
            Route::post('dormitory_transfer_request', [TraineeDormitory::class, 'create_transfer_request']);
            Route::post('transfer_request/cancel/{tenant}', [TraineeDormitory::class, 'cancel_transfer_request']);
            Route::get('transfers', [TraineeDormitory::class, 'view_transfer_request']);
            Route::post('extension_request', [TraineeDormitory::class, 'create_extend_request']);
            Route::post('extension_request/cancel/{tenant}', [TraineeDormitory::class, 'cancel_extend_request']);
            Route::post('cancel_request/{tenant}', [TraineeDormitory::class, 'cancel_request']);
            Route::post('count_book_reservation', [TraineeDormitory::class, 'count_book_reservation']);
        });

        Route::prefix('/libraries/')->group(function () {
            Route::post('request_books', [TraineeLibrary::class, 'send_request_book']);
            Route::post('get_all_books', [TraineeLibrary::class, 'view_books']);
            Route::get('book_overdues', [TraineeLibrary::class, 'view_over_due']);
            Route::post('cancel_book', [TraineeLibrary::class, 'cancel_book']);
            Route::get('pdfs', [TraineeLibrary::class, 'pdf_copies']);
            Route::match(['GET', 'POST'], 'book_info/{book_id}', [TraineeLibrary::class, 'get_book_info']);
            Route::post('requests/', [TraineeLibrary::class, 'get_book_records']);
            Route::post('request/details', [TraineeLibrary::class, 'view_request_details']);
            Route::match(['GET', 'POST'], 'requests/count', [TraineeLibrary::class, 'count_book_reservation']);
            Route::post('requests/extension', [TraineeLibrary::class, 'view_extend_request']);
            Route::post('requests/available_extension', [TraineeLibrary::class, 'view_available_extension']);
            Route::post('requests/submit_extension', [TraineeLibrary::class, 'extend']);
            Route::post('requests/extension/cancel', [TraineeLibrary::class, 'cancel_extend']);
            Route::post('requests/renew', [TraineeLibrary::class, 'renew']);
            Route::post('renew/cancel', [TraineeLibrary::class, 'cancelRenew']);
            Route::get("counts", [TraineeLibrary::class, 'viewLibRequestCount']);
        });

        Route::prefix('/client_satisfaction/')->group(function () {
            Route::get('surveys', [CsmsController::class, 'view']);
            Route::post('surveys/create', [CsmsController::class, 'createV1']);
            Route::post('surveys/delete/{id}', [CsmsController::class, 'delete']);
        });

        Route::prefix('/invoices/')->group(function () {
            Route::get('get_all_invoices', [TraineeInvoices::class, 'get_all_trainee_invoices']);
            Route::get('view/penalties', [TraineeInvoices::class, 'library_penalties']);
            Route::post('update/penalties', [TraineeInvoices::class, 'updateLibInvoice']);
            Route::get('view/{tenant}', [TraineeInvoices::class, 'viewDormitoryInvoices']);
            Route::post('billing/update', [TraineeInvoices::class, 'updateDormInvoice']);
            Route::post('enrollment/update', [TraineeInvoices::class, 'updateEnrollmentInvoice']);
            Route::get('view/{user}', [TraineeInvoices::class, 'recreationalInvoices']);
        });

        Route::prefix("/scan_records")->group(function () {
            Route::get("/view", [QrReaderController::class, "viewUserQrRecord"]);
            Route::get("/view/types", [QrReaderController::class, "qrTypes"]);
        });
    });

    Route::middleware(['user_role:TRAINER', 'throttle:60,1'])->prefix('/trainer/')->group(function () {
        Route::prefix('enrollment/')->group(function () {
            Route::get('training', [TrainerEnrollmentController::class, 'viewAllTrainingsAndFacilitators']);
            Route::get('courses', [TrainerEnrollmentController::class, 'view']);
            Route::get('courses/{course}', [TrainerEnrollmentController::class, 'viewTrainingSchedules']); //*
            Route::post("trainee_details", [TrainerEnrollmentController::class, 'getTraineeDetails']);
            Route::post("course_details", [TrainerEnrollmentController::class, 'getCourseDetails']);
            Route::post('traineeAttendanceRecord', [AttendanceController::class, 'TraineeAttendanceRecord']);
            Route::post('attendance_record', [AttendanceController::class, 'attendance_record']);
            Route::post('attendance_ByGroup', [AttendanceController::class, 'attendanceByGroup']);
            Route::post('update_record', [AttendanceController::class, 'update_attendance_record']);
            //! announcement
            Route::post('announcement_edit', [AnnouncementController::class, 'AnnouncementEdit']);
            Route::post('announcement_delete', [AnnouncementController::class, 'AnnouncementDelete']);
            Route::post('trainerAnnouncement', [AnnouncementController::class, 'Announcement']);
        });
    });

    Route::middleware(['user_role:TRAINEE,TRAINER,SUPERADMIN', 'throttle:60,1'])->group(function () {
        Route::prefix('recreationals/')->group(function () {
            Route::post("qr_checker", [TraineeRecreational::class, "checkUniqueIdentifier"]);
            Route::get('equipment', [TraineeRecreational::class, 'viewEquipment']);
            Route::get('facilities', [TraineeRecreational::class, 'viewFacilities']);
            Route::post('requests', [TraineeRecreational::class, 'requestEquipment']);
            Route::post('get_recreational_request', [TraineeRecreational::class, 'get_recreational_request']);
            Route::post('get_recreational_request/get_requested_equipments', [TraineeRecreational::class, 'getRecreationalRequest']);
            Route::post('get_recreational_request/cancel_requested_units', [TraineeRecreational::class, 'cancelUnitsRequest']);
            Route::get('counts', [TraineeRecreational::class, 'viewRecRequestCount']);
        });
    });

    Route::middleware(['user_role:TRAINEE,TRAINER,SUPERADMIN', 'throttle:60,1'])->prefix('lms/')->group(function () {
        Route::prefix("handouts/")->group(function () {
            Route::post("view_handouts", [LMSHandoutController::class, "view"]);
            Route::post("create_handouts", [LMSHandoutController::class, "store"]);
        });

        Route::prefix("assessments/")->group(function () {
            Route::post("view_assessments", [LMSAssessmentController::class, "view"]);
            Route::post("view_assessments/assessment", [LMSAssessmentController::class, "viewAssessmentContent"]);
            Route::post("create_assessments", [LMSAssessmentController::class, "create"]);
            Route::post("update_assessments", [LMSAssessmentController::class, "update"]);
            Route::post("delete_assessments", [LMSAssessmentController::class, "delete"]);
        });
        Route::prefix('sections/')->group(function () {
            Route::get("view_sections/{assessment}", [LMSAssessmentSectionController::class, "view"]);
            Route::post("create_sections", [LMSAssessmentSectionController::class, "create"]);
            Route::post("update_sections", [LMSAssessmentSectionController::class, "update"]);
            Route::delete("delete_sections", [LMSAssessmentSectionController::class, "delete"]);
        });

        Route::prefix('questions/')->group(function () {
            Route::get("view_questions/{section}", [LMSAssessmentQuestionController::class, "view"]);
            Route::post("create_questions", [LMSAssessmentQuestionController::class, "create"]);
            Route::post("update_questions", [LMSAssessmentQuestionController::class, "update"]);
            Route::delete("delete_questions", [LMSAssessmentQuestionController::class, "delete"]);
        });

       Route::prefix('courses/')->group(function () {
            Route::post("view_courses", [LMSController::class, "view"]);
            Route::post("create_courses", [LMSController::class, "create"]);
            Route::post("create_course_contents", [LMSController::class, "createSectionContents"]);
            Route::post("update_course_contents", [LMSController::class, "updateForContent"]);
            Route::post("update_course_sections", [LMSController::class, "updateForContentParent"]);
            Route::delete("delete_courses", [LMSController::class, "delete"]);
        });    
    });

    //!FOR RECREATIONALS
    Route::get('trainee-info/{traineeId}', [Account::class, 'trainee_info']);
    Route::post('update_notification', [NotificationCtrl::class, 'update_notification']);
    Route::post('get_notifications', [NotificationCtrl::class, 'get_notifications']);
    Route::post('change-theme', [Account::class, 'change_theme']);
    Route::post('logout', [Logout::class, 'logout_user']);
});

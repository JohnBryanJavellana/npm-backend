<?php

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
    CreditController,
    TraineeRecreational
};
/** administrator controllers */
use App\Http\Controllers\Authenticated\Administrator\{
    Account,
    NotificationCtrl
};
/** other controllers */
use App\Http\Controllers\Authenticated\Logout;
use App\Http\Controllers\Authenticated\Trainer\TrainerEnrollmentController;

/** imported models */
use App\Models\User;

/** guest routes */
Route::match(['GET', 'POST'], '/login', [LoginController::class, 'login_user']);
Route::post('/register', [RegisterController::class,'register_user']);
Route::get('/email/verify', [EmailVerificationController::class, 'verify'])->middleware(['signed', 'throttle:6,1'])->name('verification.verify');
Route::post('/forgot-password', [ForgotPasswordController::class, 'forgotPassword']);
Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword']);

/** testing routes */
Route::get('test', [TraineeRecreational::class, 'viewEquipments']);


/** authenticated routes */
Route::middleware(['auth:sanctum', 'throttle:60,1'])->group(function () {
    Route::post('/broadcasting/auth', function (Request $request) {
        return Broadcast::auth($request);
    });

    /** current user */
    Route::get('/user', function(Request $request) {
        $user = User::where('id', $request->user()->id);

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
        Route::prefix('/my-account/')->group(function() {
            Route::post('create_or_update_additional_info', [MyAccount::class,'create_or_update_additional_info']);
            Route::post('upload_profile_picture', [MyAccount::class,'upload_profile_picture']);
            Route::get('get_trainee_general_info/{user}', [MyAccount::class, 'get_trainee_general_info']);
            Route::post('update_password', [Account::class, 'update_password']);
            Route::get('get_activities', [Account::class, 'get_activities']);
            Route::get('get_all_courses_and_schools', [MyAccount::class, 'get_all_courses_and_schools']);
            Route::get('get_all_requirements', [MyAccount::class, '']);
            Route::get("dropdown_values", [TraineeEnrollment::class, "viewRanksLicenses"]);
        });

        Route::prefix('/enrollment/')->group(function () {
            Route::match(["GET", "POST"],'get_requirements/{module}', [TraineeEnrollment::class, 'view_module_requirements_v2']);
            Route::post('remove_training_request/{course}', [TraineeEnrollment::class, 'remove_training_request']);
            Route::match(['POST', 'GET'],'get_available_trainings', [TraineeEnrollment::class,'get_available_trainings']);
            Route::post('send_enrollment_request', [TraineeEnrollment::class,'send_enrollment_request']);
            Route::post('send_training_requirements', [TraineeEnrollment::class,'send_training_requirements']);
            Route::post('update_enrollment_request', [TraineeEnrollment::class,'update_requirements_request']);
            Route::post('update_invoice_trainings', [TraineeEnrollment::class,'update_invoice_trainings']);
            Route::post('get_all_trainee_invoices_two', [TraineeEnrollment::class,'get_all_trainee_invoices_two']);
            //status
            Route::post('get_applications/', [TraineeEnrollment::class, 'get_applications']);
            //byId
            Route::post('get_applications/{course}', [TraineeEnrollment::class, 'get_application']);
            Route::post('change_card_color', [TraineeEnrollment::class, 'change_card_color']);
            Route::post("course_modules", [TraineeEnrollment::class, 'getCourseModule']);
        });
        
        Route::prefix('/trainings/')->group(function() {
            Route::get('get_all_courses', [TraineeCourses::class, 'get_all_courses']);            
            Route::get('get_trainee_trainings', [TraineeCourses::class, 'get_trainee_courses']);
        });

        Route::prefix('/dormitories/')->group(function() {
            //DORM REQUEST
            Route::post('rooms', [TraineeDormitory::class, 'viewRecommendedRooms']);

            Route::post('applied_dormitories', [TraineeDormitory::class, 'view_room_application']);
            Route::get('applied_dormitories/view/{dormitory_id}', [TraineeDormitory::class, 'view_applied_dormitories']);

            Route::get('remove_applied_dormitories/{dormitory_id}', [TraineeDormitory::class, 'remove_applied_dormitories']);
            Route::get('check_pending_request', [TraineeDormitory::class, 'check_pending_request']);
            Route::get('get_personal_dormitory', [TraineeDormitory::class, 'get_personal_dormitory']);
            Route::post('request_tenant_room', [TraineeDormitory::class,'request_tenant_room']);
            Route::post('update_status_dormitory', [TraineeDormitory::class,'update_status_dormitory']);
            Route::post('get_filtered_dorms', [TraineeDormitory::class, 'get_filtered_dorms']);
            Route::get('dormitory_record', [TraineeDormitory::class, 'dormitory_record']);

            //INCLUSIONS
            Route::get('applied_dormitories/view/{dormitory_id}/inclusions', [TraineeDormitory::class, 'view_inclusion']);
            Route::get('inclusion/requests/{dormitory_id}', [TraineeDormitory::class, 'view_inclusion_request']);
            Route::get('inclusion/view', [TraineeDormitory::class, 'view_available_items']);
            Route::post("inclusion/create", [TraineeDormitory::class, 'request_inclusion']);
            Route::post("inclusion/cancel", [TraineeDormitory::class, 'cancel_request_inclusion']);
            //SERVICES
            Route::get('services', [TraineeDormitory::class, 'view_service']);
            Route::get('services/{document_id}', [TraineeDormitory::class, 'user_service_request']);
            Route::post('services/{document_id}/create', [TraineeDormitory::class, 'create_service_request'])->whereNumber("document_id");
            Route::post('services/{document_id}/cancel', [TraineeDormitory::class, 'cancel_service_request'])->whereNumber("document_id");
            //HISTORY
            Route::get('applied_dormitories/view/getAllHistories/{dormitory_id}', [TraineeDormitory::class, 'applied_dormitory_histories']);
            //PAYMENT?
            Route::post('dormitory_payment_request', [TraineeDormitory::class, 'update_dorm_invoice']);
            //DORM TRANSFER
            Route::post('dormitory_transfer_request', [TraineeDormitory::class, 'create_transfer_request']);
            Route::post('transfer_request/cancel/{tenant}', [TraineeDormitory::class, 'cancel_transfer_request']);
            Route::get('transfers', [TraineeDormitory::class, 'view_transfer_request']);
            //DORM EXTENSION
            Route::post('extension_request', [TraineeDormitory::class, 'create_extend_request']);
            Route::post('extension_request/cancel/{tenant}', [TraineeDormitory::class, 'cancel_extend_request']);

            //MISCELLANEOUS
            Route::post('cancel_request/{tenant}', [TraineeDormitory::class, 'cancel_request']);
            Route::post('count_book_reservation', [TraineeDormitory::class, 'count_book_reservation']);
        });

        Route::prefix('/libraries/')->group(function() {
            Route::post('request_books', [TraineeLibrary::class, 'send_request_book']);
            Route::post('get_all_books', [TraineeLibrary::class, 'view_books']);
            Route::get('book_overdues', [TraineeLibrary::class, 'view_over_due']);
            Route::post('cancel_book', [TraineeLibrary::class, 'cancel_book']);
            Route::get('pdfs', [TraineeLibrary::class, 'pdf_copies']);
            Route::match(['GET', 'POST'], 'book_info/{book_id}', [TraineeLibrary::class, 'get_book_info']);
            Route::post('requests/', [TraineeLibrary::class, 'get_book_records']);
            Route::post('request/details', [TraineeLibrary::class, 'view_request_details']);
            Route::match(['GET', 'POST'],'requests/count', [TraineeLibrary::class, 'count_book_reservation']);
            Route::post('requests/extension', [TraineeLibrary::class, 'view_extend_request']);
            Route::post('requests/available_extension', [TraineeLibrary::class, 'view_available_extension']);
            Route::post('requests/submit_extension', [TraineeLibrary::class, 'extend']);
            Route::post('requests/extension/cancel', [TraineeLibrary::class, 'cancel_extend']);
            Route::post('requests/renew', [TraineeLibrary::class, 'renew']);
            Route::post('renew/cancel', [TraineeLibrary::class, 'cancelRenew']);
        });

        Route::prefix('/client_satisfaction/')->group(function() {
            Route::get('surveys', [CsmsController::class, 'view']);
            Route::post('surveys/create', [CsmsController::class, 'create']);
            Route::post('surveys/delete/{id}', [CsmsController::class, 'delete']);
        });

        Route::prefix('/invoices/')->group(function() {
            Route::get('get_all_invoices', [TraineeInvoices::class, 'get_all_trainee_invoices']);
            Route::get('view/penalties', [TraineeInvoices::class, 'library_penalties']);
            Route::post('update/penalties', [TraineeInvoices::class, 'updateLibInvoice']);
            Route::get('view/{id}', [TraineeInvoices::class, 'view_dormitory_invoices']);
            Route::post('billing/update', [TraineeInvoices::class, 'updateDormInvoice']);
            Route::post('enrollment/update', [TraineeInvoices::class, 'updateEnrollmentInvoice']);
        });

        Route::prefix('/credits/')->group(function() {
            Route::get("audits", [CreditController::class, "show"]);
            Route::post("audits/create", [CreditController::class, "store"]);

        });
    });

    Route::middleware('user_role:TRAINER')->prefix('/trainer/')->group(function () { 
        Route::prefix('enrollment/')->group(function() {
            Route::get('courses', [TrainerEnrollmentController::class, 'view']);
            Route::get('courses/{course}', [TrainerEnrollmentController::class, 'viewTrainingSchedules']);
        });
    });

      Route::middleware('user_role:TRAINEE,TRAINER,SUPERADMIN')->group(function () {
          Route::prefix('recreationals/')->group(function() {
            Route::get('equipment', [TraineeRecreational::class, 'viewEquipment']);
            // Route::post('request/', [TraineeRecreational::class, 'viewEquipments']);
        });
    });

    //FOR RECREATIONALS
    Route::get('trainee-info/{traineeId}', [Account::class, 'trainee_info']);
    Route::post('update_notification', [NotificationCtrl::class, 'update_notification']);
    Route::post('get_notifications', [NotificationCtrl::class, 'get_notifications']);
    Route::post('change-theme', [Account::class, 'change_theme']);
    Route::post('logout', [Logout::class, 'logout_user']);
});


<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Cache;

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
    CreditController
};
/** administrator controllers */
use App\Http\Controllers\Authenticated\Administrator\{
    Account,
    DormitoryController,
    EnrollmentCtrl,
    LibraryController,
    Cashier,
    NotificationCtrl,
    Masterlist
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

//remove
Route::get("test", [TraineeEnrollment::class, "test"]);

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

    // SUPERADMIN: needs access for updating user details
    // reuse trainee user profile update functionalities
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

        Route::prefix('/trainer/enrollment/')->middleware('user_role:TRAINER,SUPERADMIN,ADMIN-ENROLLMENT')->group(function () { 
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


    /** administrator routes */
    Route::prefix('/admin/')->middleware('user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER')->group(function() {
        Route::prefix('/enrollment/')->group(function() {
            Route::post('get_applications', [EnrollmentCtrl::class, 'get_applications']);
            Route::post('get_applications/requirement_remark', [EnrollmentCtrl::class, 'requirement_remark']);
            Route::post('get_applications/set_training_status', [EnrollmentCtrl::class, 'set_training_status']);
            Route::post('get_applications/set_expired_status', [EnrollmentCtrl::class, 'set_expired_status']);
            Route::get('get_applications/remove_training_request/{training_request_id}', [EnrollmentCtrl::class, 'remove_training_request']);
            Route::get('get_enrolled', [EnrollmentCtrl::class, 'get_enrolled']);
            Route::get('get_finished', [EnrollmentCtrl::class, 'get_finished']);
            Route::post('lock_requirement', [EnrollmentCtrl::class, 'lock_requirement']);

            Route::get('get_schedules', [EnrollmentCtrl::class, 'get_schedules']);
            Route::post('create_or_update_schedule', [EnrollmentCtrl::class, 'create_or_update_schedule']);
            Route::delete('remove_schedule/{schedule_id}', [EnrollmentCtrl::class, 'remove_schedule']);

            Route::get('get_modules', [EnrollmentCtrl::class, 'get_modules']);
            Route::post('create_or_update_module', [EnrollmentCtrl::class, 'create_or_update_module']);
            Route::delete('remove_module/{module_id}', [EnrollmentCtrl::class, 'remove_module']);

            Route::get('get_module_types', [EnrollmentCtrl::class, 'get_module_types']);
            Route::post('create_or_update_module_type', [EnrollmentCtrl::class, 'create_or_update_module_type']);
            Route::delete('remove_module_type/{module_type_id}', [EnrollmentCtrl::class, 'remove_module_type']);

            Route::get('get_certificates', [EnrollmentCtrl::class, 'get_certificates']);
            Route::post('create_or_update_certificate', [EnrollmentCtrl::class, 'create_or_update_certificate']);
            Route::delete('remove_certificate/{certificate_id}', [EnrollmentCtrl::class, 'remove_certificate']);

            Route::get('get_requirements', [EnrollmentCtrl::class, 'get_requirements']);
            Route::post('create_or_update_requirement', [EnrollmentCtrl::class, 'create_or_update_requirement']);
            Route::delete('training-requirements/remove_trequirement/{requirement_id}', [EnrollmentCtrl::class, 'remove_requirement']);

            Route::get('get_schools', [EnrollmentCtrl::class, 'get_schools']);
            Route::post('create_or_update_school', [EnrollmentCtrl::class, 'create_or_update_school']);
            Route::delete('remove_school/{school_id}', [EnrollmentCtrl::class, 'remove_school']);

            Route::get('get_courses', [EnrollmentCtrl::class, 'get_courses']);
            Route::post('create_or_update_course', [EnrollmentCtrl::class, 'create_or_update_course']);
            Route::delete('remove_course/{course_id}', [EnrollmentCtrl::class, 'remove_course']);

            Route::get('get_vouchers', [EnrollmentCtrl::class, 'get_vouchers']);
            Route::post('create_or_update_voucher', [EnrollmentCtrl::class, 'create_or_update_voucher']);
            Route::delete('remove_voucher/{voucher_id}', [EnrollmentCtrl::class, 'remove_voucher']);

            Route::get('get_sponsors', [EnrollmentCtrl::class, 'get_sponsors']);
            Route::post('create_or_update_sponsor', [EnrollmentCtrl::class, 'create_or_update_sponsor']);
            Route::delete('remove_sponsor/{sponsor_id}', [EnrollmentCtrl::class, 'remove_sponsor']);

            Route::get('get_licenses', [EnrollmentCtrl::class, 'get_licenses']);
            Route::post('create_or_update_license', [EnrollmentCtrl::class, 'create_or_update_license']);
            Route::delete('remove_license/{license_id}', [EnrollmentCtrl::class, 'remove_license']);

            Route::get('get_ranks', [EnrollmentCtrl::class, 'get_ranks']);
            Route::post('create_or_update_rank', [EnrollmentCtrl::class, 'create_or_update_rank']);
            Route::delete('remove_rank/{rank_id}', [EnrollmentCtrl::class, 'remove_rank']);

            Route::get('get_facilitators', [EnrollmentCtrl::class, 'get_facilitators']);
            Route::post('create_or_update_facilitator', [EnrollmentCtrl::class, 'create_or_update_facilitator']);
            Route::delete('remove_facilitator/{facilitator_id}', [EnrollmentCtrl::class, 'remove_facilitator']);

            Route::get('get_training_fees_predata', [EnrollmentCtrl::class, 'get_training_fees_predata']);
            Route::get('get_course_module_fees', [EnrollmentCtrl::class, 'get_course_module_fees']);
            Route::post('create_or_update_course_fee', [EnrollmentCtrl::class, 'create_or_update_course_fee']);
            Route::delete('remove_course_fee/{course_fee_id}', [EnrollmentCtrl::class, 'remove_course_fee']);
        });

        Route::prefix('/books/')->group(function() {
            Route::get('get_books', [LibraryController::class, 'get_books']);
            Route::get('get_pre_data', [LibraryController::class, 'get_pre_data']);
            Route::match(['GET', 'POST'], 'get_book_info/{book_id}', [LibraryController::class, 'get_book_info']);
            Route::get('get_book_info/get_copies/{book_id}', [LibraryController::class, 'get_copies']);
            Route::post('create_book_copies', [LibraryController::class, 'create_book_copies']);
            Route::get('get_book_total_reservations/{book_id}', [LibraryController::class, 'get_book_total_reservations']);
            Route::post('update_reservation', [LibraryController::class, 'update_reservation']);
            Route::post('get_available_books', [LibraryController::class, 'get_available_books']);
            Route::post('create_walkin_request', [LibraryController::class, 'create_walkin_request']);
            Route::post('create_or_update_book', [LibraryController::class, 'create_or_update_book']);
            Route::match(['GET', 'POST'], 'get_book_reservation', [LibraryController::class, 'get_book_reservation']);
            Route::post('get_book_reservation/get_fines', [LibraryController::class, 'get_fines']);
            Route::post('get_book_reservation/create_fine', [LibraryController::class, 'create_fine']);
            Route::delete('get_book_reservation/remove_fine/{id}', [LibraryController::class, 'remove_fine']);
            Route::post('get_book_reservation/get_book_reservation_that_needs_fine', [LibraryController::class, 'get_book_reservation_that_needs_fine']);
            Route::post('get_book_reservation/get_prolongation_request', [LibraryController::class, 'get_prolongation_request']);
            Route::post('get_book_reservation/get_books_that_protractible', [LibraryController::class, 'get_books_that_protractible']);
            Route::post('get_book_reservation/submit_renewal_request', [LibraryController::class, 'submit_renewal_request']);
            Route::post('get_book_reservation/submit_extension_request', [LibraryController::class, 'submit_extension_request']);
            Route::post('get_book_reservation/update_prolongation_request', [LibraryController::class, 'update_prolongation_request']);
            Route::post('get_book_reservation/count_book_reservation', [LibraryController::class, 'count_book_reservation']);
            Route::post('get_book_reservation/check_for_book_reservation', [LibraryController::class, 'check_for_book_reservation']);
            Route::delete('get_book_info/remove_copy/{copy_id}', [LibraryController::class, 'remove_copy']);
            Route::delete('remove_book/{book_id}', [LibraryController::class, 'remove_book']);
        });

        Route::prefix('/book_entry/')->group(function() {
            Route::get('get_book_entries', [LibraryController::class, 'get_book_entries']);
            Route::get('get_active_entries', [LibraryController::class, 'get_active_entries']);
            Route::post('create_or_update_book_entry', [LibraryController::class, 'create_or_update_book_entry']);
            Route::delete('remove_entry/{entry_id}', [LibraryController::class, 'remove_entry']);
        });

        Route::prefix('/dormitory/')->group(function() {
            Route::get('get', [DormitoryController::class, 'dormitories']);
            Route::get('get_dormitory_rooms/{dormitory_id}', [DormitoryController::class, 'get_dormitory_rooms']);
            Route::get('get_dormitory_info/{dormitory_id}', [DormitoryController::class, 'get_dormitory_info']);
            Route::post('create_or_update_dormitory', [DormitoryController::class, 'create_or_update_dormitory']);
            Route::post('create_dormitory_rooms', [DormitoryController::class, 'create_dormitory_rooms']);
            Route::post('create-walk-in-request/get_available_dorms', [DormitoryController::class, 'get_available_dorms']);
            Route::post('create-walk-in-request/get_available_rooms', [DormitoryController::class, 'get_available_rooms']);
            Route::post('create-walk-in-request/get_available_supplies', [DormitoryController::class, 'get_available_supplies']);
            Route::post('create-walk-in-request/create_or_update_request', [DormitoryController::class, 'create_or_update_request']);
            Route::post('get_all_requests', [DormitoryController::class, 'get_all_requests']);
            Route::delete('cancel_dorm_request/{dormReqId}', [DormitoryController::class, 'cancel_dorm_request']);
            Route::delete('remove_room/{room_id}', [DormitoryController::class, 'remove_room']);
            Route::match(['GET', 'POST'], 'get_inventories', [DormitoryController::class, 'get_dorm_inventories']);
            Route::post('get_inventories/create_dormitory_inventory_stock', [DormitoryController::class, 'create_dormitory_inventory_stock']);
            Route::post('get_inventories/get_dormitory_inventory_stock', [DormitoryController::class, 'get_dormitory_inventory_stock']);
            Route::post('create_or_update_dormitory_inventory', [DormitoryController::class, 'create_or_update_dormitory_inventory']);
            Route::delete('get_inventories/remove_dorm_inventory_stock/{stock_id}', [DormitoryController::class, 'remove_dorm_inventory_stock']);
            Route::delete('remove_dorm_inventory/{inv_id}', [DormitoryController::class, 'remove_dorm_inventory']);
            Route::get('services', [DormitoryController::class, 'services']);
            Route::post('create_or_update_service', [DormitoryController::class, 'create_or_update_service']);
            Route::delete('remove_service/{service_id}', [DormitoryController::class, 'remove_service']);
            Route::post('update_provided_stock_status', [DormitoryController::class, 'update_provided_stock_status']);
            Route::post('update_provided_stock_list', [DormitoryController::class, 'update_provided_stock_list']);
            Route::post('count_dorm_reservation', [DormitoryController::class, 'count_dorm_reservation']);
            Route::post('get_requested_service', [DormitoryController::class, 'get_requested_service']);
            Route::post('request_service', [DormitoryController::class, 'request_service']);
            Route::post('update_requested_service', [DormitoryController::class, 'update_requested_service']);
            Route::post('set_status', [DormitoryController::class, 'set_status']);

            Route::post('get_dormitory_charges', [DormitoryController::class, 'get_dormitory_charges']);
            Route::post('created_or_update_dormitory_charge', [DormitoryController::class, 'created_or_update_dormitory_charge']);
            Route::delete('cancel_charge/{chargeId}', [DormitoryController::class, 'cancel_charge']);
        });

        Route::prefix('/masterlist/')->group(function() {
            Route::prefix('/user/')->group(function() {
                Route::match(['GET', 'POST'], 'get_users', [Masterlist::class, 'get_users']);
                Route::get('get_user_basic_info/{user_id}', [Masterlist::class, 'get_user_basic_info']);
                Route::get('get_user_activities/{user_id}', [Masterlist::class, 'get_user_activities']);
                Route::post('create_or_update_user', [Masterlist::class, 'create_or_update_user']);
                Route::delete('remove_user/{user_id}', [Masterlist::class, 'remove_user']);
            });

            Route::prefix('/employer/')->group(function() {
                Route::get('get_employers', [Masterlist::class, 'get_employers']);
                Route::post('create_or_update_employer', [Masterlist::class, 'create_or_update_employer']);
                Route::delete('remove_employer/{employer_id}', [Masterlist::class, 'remove_employer']);
            });

            Route::prefix('/position/')->group(function() {
                Route::get('get_positions', [Masterlist::class, 'get_positions']);
                Route::post('create_or_update_position', [Masterlist::class, 'create_or_update_position']);
                Route::delete('remove_position/{position_id}', [Masterlist::class, 'remove_position']);
            });
        });

        Route::prefix('/invoice/')->group(function() {
            Route::post('get_invoices', [Cashier::class, 'get_invoices']);
            Route::post('update_payment_status', [Cashier::class, 'update_payment_status']);
        });

        Route::prefix('/cashier/')->group(function() {
            Route::post('get_payments', [Cashier::class, 'get_payments']);
            Route::post('pay-walk-in', [Cashier::class, 'pay_walkin']);
            Route::post('verify_payment', [Cashier::class, 'verify_payment']);

            Route::get('get_charges', [Cashier::class, 'get_charges']);
            Route::get('get_charges/get_charges_predata', [Cashier::class, 'get_charges_predata']);
            Route::post('create_or_update_charge', [Cashier::class, 'create_or_update_charge']);
            Route::delete('remove_charge/{chargeId}', [Cashier::class, 'remove_charge']);

            Route::get('get_charges_category', [Cashier::class, 'get_charges_category']);
            Route::post('create_or_update_charge_category', [Cashier::class, 'create_or_update_charge_category']);
            Route::delete('remove_charge_category/{fee_category_id}', [Cashier::class, 'remove_charge_category']);

            Route::match(['GET', 'POST'], 'get_or_numbers', [Cashier::class, 'get_or_numbers']);
            Route::post('create_or_update_or_number', [Cashier::class, 'create_or_update_or_number']);
            Route::delete('remove_or_number/{fee_category_id}', [Cashier::class, 'remove_or_number']);
        });

        Route::post('get_charges_predata', [DormitoryController::class, 'get_charges_predata']);
        Route::post('get_trainee_enrolled_trainings', [DormitoryController::class, 'get_trainee_enrolled_trainings']);
        Route::post('submit-csm', [Account::class, 'submit_csm']);

        Route::prefix('/my-account/')->group(function() {
            Route::post('update_personal', [Account::class, 'update_personal']);
            Route::post('update_password', [Account::class, 'update_password']);
            Route::get('get_activities', [Account::class, 'get_activities']);
        });
    });

    Route::get('trainee-info/{traineeId}', [Account::class, 'trainee_info']);
    Route::post('update_notification', [NotificationCtrl::class, 'update_notification']);
    Route::post('get_notifications', [NotificationCtrl::class, 'get_notifications']);
    Route::post('change-theme', [Account::class, 'change_theme']);
    Route::post('logout', [Logout::class, 'logout_user']);
});


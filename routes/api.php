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
    CsmsController
};
/** administrator controllers */
use App\Http\Controllers\Authenticated\Administrator\{
    Account,
    DormitoryController,
    EnrollmentCtrl,
    LibraryController,
    Cashier,
    Masterlist
};
/** other controllers */
use App\Http\Controllers\Authenticated\Logout;
/** imported models */
use App\Models\User;

/** guest routes */
Route::match(['GET', 'POST'], '/login', [LoginController::class, 'login_user']);
Route::post('/register', [RegisterController::class,'register_user']);
Route::get('/email/verify', [EmailVerificationController::class, 'verify'])->middleware(['signed', 'throttle:6,1'])->name('verification.verify');
Route::post('/forgot-password', [ForgotPasswordController::class, 'forgotPassword']);
Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword']);

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
                    'additional_trainee_info.trainee_registration_file',
                    'additional_trainee_info.trainee_registration_file.requirement',
                ]);
        }

        return response()->json(['user' => $user->first()]);
    });

    /** trainee routes
     * MUST HAVE A THROTTLE
    */
    Route::middleware('trainee')->group(function () {
        Route::prefix('/my-account/')->group(function() {
            Route::post('create_or_update_additional_info', [MyAccount::class,'create_or_update_additional_info']);
            Route::post('upload_profile_picture', [MyAccount::class,'upload_profile_picture']);
            Route::get('get_trainee_general_info', [MyAccount::class, 'get_trainee_general_info']);
            Route::post('update_password', [Account::class, 'update_password']);
            Route::get('get_activities', [Account::class, 'get_activities']);
            Route::get('get_all_courses_and_schools', [MyAccount::class, 'get_all_courses_and_schools']);
            Route::get('get_all_requirements', [MyAccount::class, '']);
        });

        Route::prefix('/enrollment/')->group(function () {
            Route::get('get_requirements/{moduleId}', [TraineeEnrollment::class, 'view_module_requirements_v2']);
            Route::post('remove_training_request/{training_request_id}', [TraineeEnrollment::class, 'remove_training_request']);
            Route::get('get_available_trainings', [TraineeEnrollment::class,'get_available_trainings']);
            Route::get('trainee_selected_training/{status}', [TraineeEnrollment::class,'trainee_selected_training']);
            Route::post('send_enrollment_request', [TraineeEnrollment::class,'send_enrollment_request']);
            Route::post('send_training_requirements', [TraineeEnrollment::class,'send_training_requirements']);
            Route::post('update_enrollment_request', [TraineeEnrollment::class,'update_enrollment_request']);
            Route::post('update_invoice_trainings', [TraineeEnrollment::class,'update_invoice_trainings']);
            Route::post('get_all_trainee_invoices_two', [TraineeEnrollment::class,'get_all_trainee_invoices_two']);
            Route::post('get_applications', [TraineeEnrollment::class, 'get_applications']);
            Route::post('change_card_color', [TraineeEnrollment::class, 'change_card_color']);
        });

        Route::prefix('/trainings/')->group(function() {
            Route::get('get_all_courses', [TraineeCourses::class, 'get_all_courses']);
            Route::get('get_trainee_trainings', [TraineeCourses::class, 'get_trainee_courses']);
        });

        Route::prefix('/dormitories/')->group(function() {
            Route::get('get_all_dormitories', [TraineeDormitory::class, 'get_all_dormitories']);
            Route::get('get_items', [TraineeDormitory::class, 'get_items']);
            Route::post('applied_dormitories', [TraineeDormitory::class, 'view_room_application']);
            Route::get('applied_dormitories/view/{dormitory_id}', [TraineeDormitory::class, 'view_applied_dormitories']);
            Route::get('applied_dormitories/view/getAllHistories/{dormitory_id}', [TraineeDormitory::class, 'applied_dormitory_histories']);
            Route::post('remove_applied_dormitories/{dormitory_id}', [TraineeDormitory::class, 'remove_applied_dormitories']);
            Route::get('check_pending_request', [TraineeDormitory::class, 'check_pending_request']);
            Route::get('get_personal_dormitory', [TraineeDormitory::class, 'get_personal_dormitory']);
            Route::post('request_tenant_room', [TraineeDormitory::class,'request_tenant_room']);
            Route::post('update_status_dormitory', [TraineeDormitory::class,'update_status_dormitory']);
            Route::post('get_filtered_dorms', [TraineeDormitory::class, 'get_filtered_dorms']);
            Route::get('dormitory_record', [TraineeDormitory::class, 'dormitory_record']);
            Route::post('dormitory_payment_request', [TraineeDormitory::class, 'update_dorm_invoice']);
            Route::post('dormitory_transfer_request', [TraineeDormitory::class, 'create_transfer_request']);
            Route::post('cancel_request/{id}', [TraineeDormitory::class, 'cancel_request']);
            Route::post('extension_request', [TraineeDormitory::class, 'create_extend_request']);
            Route::post('count_book_reservation', [TraineeDormitory::class, 'count_book_reservation']);
        });

        Route::prefix('/libraries/')->group(function() {
            Route::post('request_books', [TraineeLibrary::class, 'send_request_book']);
            Route::get('get_all_books', [TraineeLibrary::class, 'view_books']);
            Route::get('book_overdues', [TraineeLibrary::class, 'view_over_due']);
            Route::post('cancel_book', [TraineeLibrary::class, 'cancel_book']);
            Route::get('get_cart', [TraineeLibrary::class, 'view_book_cart']);
            Route::get('pdfs', [TraineeLibrary::class, 'pdf_copies']);
            Route::post('add_book', [TraineeLibrary::class, 'add_book_items']);
            Route::post('remove_book', [TraineeLibrary::class, 'remove_book_items']);
            Route::match(['GET', 'POST'], 'book_info/{book_id}', [TraineeLibrary::class, 'get_book_info']);
            Route::post('requests/', [TraineeLibrary::class, 'get_book_records']);
            Route::post('request/details', [TraineeLibrary::class, 'view_request_details']);
            Route::match(['GET', 'POST'],'requests/count', [TraineeLibrary::class, 'count_book_reservation']);
            Route::post('requests/extension', [TraineeLibrary::class, 'view_extend_request']);
            Route::post('requests/available_extension', [TraineeLibrary::class, 'view_available_extension']);
            Route::post('requests/submit_extension', [TraineeLibrary::class, 'extend']);
            Route::post('requests/extension/cancel', [TraineeLibrary::class, 'cancel_extend']);
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
        });
    });

    /** administrator routes */
    Route::prefix('/admin/')->group(function() {
        Route::middleware('user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY')->group(function() {
            Route::prefix('/enrollment/')->group(function() {
                Route::post('get_applications', [EnrollmentCtrl::class, 'get_applications']);
                Route::post('get_applications/requirement_remark', [EnrollmentCtrl::class, 'requirement_remark']);
                Route::post('get_applications/set_training_status', [EnrollmentCtrl::class, 'set_training_status']);
                Route::post('get_applications/set_expired_status', [EnrollmentCtrl::class, 'set_expired_status']);
                Route::get('get_applications/remove_training_request/{training_request_id}', [EnrollmentCtrl::class, 'remove_training_request']);
                Route::get('get_enrolled', [EnrollmentCtrl::class, 'get_enrolled']);
                Route::get('get_finished', [EnrollmentCtrl::class, 'get_finished']);
                Route::post('lock_requirement', [EnrollmentCtrl::class, 'lock_requirement']);

                // schedules
                Route::get('get_schedules', [EnrollmentCtrl::class, 'get_schedules']);
                Route::post('create_or_update_schedule', [EnrollmentCtrl::class, 'create_or_update_schedule']);
                Route::delete('remove_schedule/{schedule_id}', [EnrollmentCtrl::class, 'remove_schedule']);

                // modules
                Route::get('get_modules', [EnrollmentCtrl::class, 'get_modules']);
                Route::post('create_or_update_module', [EnrollmentCtrl::class, 'create_or_update_module']);
                Route::delete('remove_module/{module_id}', [EnrollmentCtrl::class, 'remove_module']);

                // module type
                Route::get('get_module_types', [EnrollmentCtrl::class, 'get_module_types']);
                Route::post('create_or_update_module_type', [EnrollmentCtrl::class, 'create_or_update_module_type']);
                Route::delete('remove_module_type/{module_type_id}', [EnrollmentCtrl::class, 'remove_module_type']);

                // fees
                Route::get('get_training_fees', [EnrollmentCtrl::class, 'get_training_fees']);
                Route::get('get_training_fees/get_training_fees_predata', [EnrollmentCtrl::class, 'get_training_fees_predata']);
                Route::post('create_or_update_training_fee', [EnrollmentCtrl::class, 'create_or_update_training_fee']);
                Route::delete('remove_training_fee/{fee_id}', [EnrollmentCtrl::class, 'remove_training_fee']);

                // fee category
                Route::get('get_training_fees_category', [EnrollmentCtrl::class, 'get_training_fees_category']);
                Route::post('create_or_update_training_fee_category', [EnrollmentCtrl::class, 'create_or_update_training_fee_category']);
                Route::delete('remove_training_fee_category/{fee_category_id}', [EnrollmentCtrl::class, 'remove_training_fee_category']);

                // certificates
                Route::get('get_certificates', [EnrollmentCtrl::class, 'get_certificates']);
                Route::post('create_or_update_certificate', [EnrollmentCtrl::class, 'create_or_update_certificate']);
                Route::delete('remove_certificate/{certificate_id}', [EnrollmentCtrl::class, 'remove_certificate']);

                // requirements
                Route::get('get_requirements', [EnrollmentCtrl::class, 'get_requirements']);
                Route::post('create_or_update_requirement', [EnrollmentCtrl::class, 'create_or_update_requirement']);
                Route::delete('training-requirements/remove_trequirement/{requirement_id}', [EnrollmentCtrl::class, 'remove_requirement']);

                // schools
                Route::get('get_schools', [EnrollmentCtrl::class, 'get_schools']);
                Route::post('create_or_update_school', [EnrollmentCtrl::class, 'create_or_update_school']);
                Route::delete('remove_school/{school_id}', [EnrollmentCtrl::class, 'remove_school']);

                // courses
                Route::get('get_courses', [EnrollmentCtrl::class, 'get_courses']);
                Route::post('create_or_update_course', [EnrollmentCtrl::class, 'create_or_update_course']);
                Route::delete('remove_course/{course_id}', [EnrollmentCtrl::class, 'remove_course']);

                // vouchers
                Route::get('get_vouchers', [EnrollmentCtrl::class, 'get_vouchers']);
                Route::post('create_or_update_voucher', [EnrollmentCtrl::class, 'create_or_update_voucher']);
                Route::delete('remove_voucher/{voucher_id}', [EnrollmentCtrl::class, 'remove_voucher']);

                // sponsors
                Route::get('get_sponsors', [EnrollmentCtrl::class, 'get_sponsors']);
                Route::post('create_or_update_sponsor', [EnrollmentCtrl::class, 'create_or_update_sponsor']);
                Route::delete('remove_sponsor/{sponsor_id}', [EnrollmentCtrl::class, 'remove_sponsor']);

                // licenses
                Route::get('get_licenses', [EnrollmentCtrl::class, 'get_licenses']);
                Route::post('create_or_update_license', [EnrollmentCtrl::class, 'create_or_update_license']);
                Route::delete('remove_license/{license_id}', [EnrollmentCtrl::class, 'remove_license']);

                // ranks
                Route::get('get_ranks', [EnrollmentCtrl::class, 'get_ranks']);
                Route::post('create_or_update_rank', [EnrollmentCtrl::class, 'create_or_update_rank']);
                Route::delete('remove_rank/{rank_id}', [EnrollmentCtrl::class, 'remove_rank']);
            });
        });

        Route::middleware('user_role:SUPERADMIN,ADMIN-LIBRARY,TRAINER')->group(function() {
            Route::prefix('/books/')->group(function() {
                Route::get('get_books', [LibraryController::class, 'get_books'])->middleware('user_role:SUPERADMIN,ADMIN-LIBRARY');
                Route::get('get_pre_data', [LibraryController::class, 'get_pre_data'])->middleware('user_role:SUPERADMIN,ADMIN-LIBRARY');
                Route::match(['GET', 'POST'], 'get_book_info/{book_id}', [LibraryController::class, 'get_book_info']);
                Route::get('get_book_info/get_copies/{book_id}', [LibraryController::class, 'get_copies'])->middleware('user_role:SUPERADMIN,ADMIN-LIBRARY');
                Route::post('create_book_copies', [LibraryController::class, 'create_book_copies'])->middleware('user_role:SUPERADMIN,ADMIN-LIBRARY');
                Route::get('get_book_total_reservations/{book_id}', [LibraryController::class, 'get_book_total_reservations'])->middleware('user_role:SUPERADMIN,ADMIN-LIBRARY');
                Route::post('update_reservation', [LibraryController::class, 'update_reservation']);
                Route::post('get_available_books', [LibraryController::class, 'get_available_books']);
                Route::post('create_walkin_request', [LibraryController::class, 'create_walkin_request']);
                Route::post('create_or_update_book', [LibraryController::class, 'create_or_update_book'])->middleware('user_role:SUPERADMIN,ADMIN-LIBRARY');
                Route::match(['GET', 'POST'], 'get_book_reservation', [LibraryController::class, 'get_book_reservation']);
                Route::post('get_book_reservation/get_fines', [LibraryController::class, 'get_fines']);
                Route::post('get_book_reservation/create_fine', [LibraryController::class, 'create_fine']);
                Route::delete('get_book_reservation/remove_fine/{id}', [LibraryController::class, 'remove_fine']);
                Route::post('get_book_reservation/get_book_reservation_that_needs_fine', [LibraryController::class, 'get_book_reservation_that_needs_fine']);
                Route::post('get_book_reservation/get_extension_request', [LibraryController::class, 'get_extension_request']);
                Route::post('get_book_reservation/get_books_that_can_extend', [LibraryController::class, 'get_books_that_can_extend']);
                Route::post('get_book_reservation/submit_extension_request', [LibraryController::class, 'submit_extension_request']);
                Route::post('get_book_reservation/update_extension_request', [LibraryController::class, 'update_extension_request']);
                Route::post('get_book_reservation/count_book_reservation', [LibraryController::class, 'count_book_reservation']);
                Route::post('get_book_reservation/check_for_book_reservation', [LibraryController::class, 'check_for_book_reservation']);
                Route::delete('get_book_info/remove_copy/{copy_id}', [LibraryController::class, 'remove_copy'])->middleware('user_role:SUPERADMIN,ADMIN-LIBRARY');
                Route::delete('remove_book/{book_id}', [LibraryController::class, 'remove_book'])->middleware('user_role:SUPERADMIN,ADMIN-LIBRARY');
            });

            Route::prefix('/genre/')->group(function() {
                Route::get('get_genres', [LibraryController::class, 'get_genres']);
                Route::get('get_active_genres', [LibraryController::class, 'get_active_genres']);
                Route::post('create_or_update_genre', [LibraryController::class, 'create_or_update_genre']);
                Route::delete('remove_genre/{genre_id}', [LibraryController::class, 'remove_genre']);
            });
        });

        Route::middleware('user_role:SUPERADMIN,ADMIN-DORMITORY,TRAINER')->group(function() {
            Route::prefix('/dormitory/')->group(function() {
                Route::get('get', [DormitoryController::class, 'dormitories'])->middleware('user_role:SUPERADMIN,ADMIN-DORMITORY');
                Route::get('get_dormitory_rooms/{dormitory_id}', [DormitoryController::class, 'get_dormitory_rooms'])->middleware('user_role:SUPERADMIN,ADMIN-DORMITORY');
                Route::get('get_dormitory_info/{dormitory_id}', [DormitoryController::class, 'get_dormitory_info'])->middleware('user_role:SUPERADMIN,ADMIN-DORMITORY');
                Route::post('create_or_update_dormitory', [DormitoryController::class, 'create_or_update_dormitory'])->middleware('user_role:SUPERADMIN,ADMIN-DORMITORY');
                Route::post('create_dormitory_rooms', [DormitoryController::class, 'create_dormitory_rooms'])->middleware('user_role:SUPERADMIN,ADMIN-DORMITORY');
                Route::post('create-walk-in-request/get_available_dorms', [DormitoryController::class, 'get_available_dorms'])->middleware('user_role:SUPERADMIN,ADMIN-DORMITORY');
                Route::post('create-walk-in-request/get_available_rooms', [DormitoryController::class, 'get_available_rooms'])->middleware('user_role:SUPERADMIN,ADMIN-DORMITORY');
                Route::post('create-walk-in-request/get_available_supplies', [DormitoryController::class, 'get_available_supplies']);
                Route::post('create-walk-in-request/create_or_update_request', [DormitoryController::class, 'create_or_update_request']);
                Route::post('get_all_requests', [DormitoryController::class, 'get_all_requests']);
                Route::delete('cancel_dorm_request/{dormReqId}', [DormitoryController::class, 'cancel_dorm_request']);
                Route::delete('remove_room/{room_id}', [DormitoryController::class, 'remove_room'])->middleware('user_role:SUPERADMIN,ADMIN-DORMITORY');

                Route::match(['GET', 'POST'], 'get_inventories', [DormitoryController::class, 'get_dorm_inventories'])->middleware('user_role:SUPERADMIN,ADMIN-DORMITORY');
                Route::post('get_inventories/create_dormitory_inventory_stock', [DormitoryController::class, 'create_dormitory_inventory_stock'])->middleware('user_role:SUPERADMIN,ADMIN-DORMITORY');
                Route::post('get_inventories/get_dormitory_inventory_stock', [DormitoryController::class, 'get_dormitory_inventory_stock'])->middleware('user_role:SUPERADMIN,ADMIN-DORMITORY');
                Route::post('create_or_update_dormitory_inventory', [DormitoryController::class, 'create_or_update_dormitory_inventory'])->middleware('user_role:SUPERADMIN,ADMIN-DORMITORY');
                Route::delete('get_inventories/remove_dorm_inventory_stock/{stock_id}', [DormitoryController::class, 'remove_dorm_inventory_stock'])->middleware('user_role:SUPERADMIN,ADMIN-DORMITORY');
                Route::delete('remove_dorm_inventory/{inv_id}', [DormitoryController::class, 'remove_dorm_inventory'])->middleware('user_role:SUPERADMIN,ADMIN-DORMITORY');
            });
        });

        Route::middleware('user_role:SUPERADMIN,ADMIN-LIBRARY')->prefix('/masterlist/')->group(function() {
            Route::prefix('/user/')->group(function() {
                Route::get('get_users', [Masterlist::class, 'get_users']);
                Route::get('get_user_basic_info/{user_id}', [Masterlist::class, 'get_user_basic_info'])->middleware('user_role:SUPERADMIN');
                Route::get('get_user_activities/{user_id}', [Masterlist::class, 'get_user_activities'])->middleware('user_role:SUPERADMIN');
                Route::post('create_or_update_user', [Masterlist::class, 'create_or_update_user'])->middleware('user_role:SUPERADMIN');
                Route::delete('remove_user/{user_id}', [Masterlist::class, 'remove_user'])->middleware('user_role:SUPERADMIN');
            });

            Route::prefix('/employer/')->middleware('user_role:SUPERADMIN')->group(function() {
                Route::get('get_employers', [Masterlist::class, 'get_employers']);
                Route::post('create_or_update_employer', [Masterlist::class, 'create_or_update_employer']);
                Route::delete('remove_employer/{employer_id}', [Masterlist::class, 'remove_employer']);
            });

            Route::prefix('/position/')->middleware('user_role:SUPERADMIN')->group(function() {
                Route::get('get_positions', [Masterlist::class, 'get_positions']);
                Route::post('create_or_update_position', [Masterlist::class, 'create_or_update_position']);
                Route::delete('remove_position/{position_id}', [Masterlist::class, 'remove_position']);
            });
        });

        Route::middleware('user_role:SUPERADMIN,CASHIER')->group(function() {
            Route::prefix('/invoice/')->group(function() {
                Route::post('get_invoices', [Cashier::class, 'get_invoices']);
                Route::post('update_payment_status', [Cashier::class, 'update_payment_status']);
            });
        });

        Route::get('trainee-info/{traineeId}', [Account::class, 'trainee_info']);
        Route::post('submit-csm', [Account::class, 'submit_csm']);

        Route::prefix('/my-account/')->group(function() {
            Route::post('update_personal', [Account::class, 'update_personal']);
            Route::post('update_password', [Account::class, 'update_password']);
            Route::get('get_activities', [Account::class, 'get_activities']);
        });
    });

    Route::post('change-theme', [Account::class, 'change_theme']);
    Route::post('logout', [Logout::class, 'logout_user']);
});


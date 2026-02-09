<?php

use Illuminate\Support\Facades\Route;

/** administrator controllers */
use App\Http\Controllers\Authenticated\Administrator\{
    Account,
    DormitoryController,
    EnrollmentCtrl,
    LibraryController,
    Cashier,
    Masterlist,
    RecreationalActivityCtrl
};

/** authenticated routes */
Route::middleware(['auth:sanctum', 'throttle:60,1'])->group(function () {
    Route::prefix('/admin/')->middleware('user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA')->group(function() {
        Route::prefix('/enrollment/')->middleware('user_role:SUPERADMIN,ADMIN-ENROLLMENT')->group(function() {
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

        Route::prefix('/books/')->middleware('user_role:SUPERADMIN,ADMIN-LIBRARY')->group(function() {
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

        Route::prefix('/book_entry/')->middleware('user_role:SUPERADMIN,ADMIN-LIBRARY')->group(function() {
            Route::get('get_book_entries', [LibraryController::class, 'get_book_entries']);
            Route::get('get_active_entries', [LibraryController::class, 'get_active_entries']);
            Route::post('create_or_update_book_entry', [LibraryController::class, 'create_or_update_book_entry']);
            Route::delete('remove_entry/{entry_id}', [LibraryController::class, 'remove_entry']);
        });

        Route::prefix('/dormitory/')->middleware('user_role:SUPERADMIN,ADMIN-DORMITORY')->group(function() {
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

        Route::prefix('/masterlist/')->middleware('user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD')->group(function() {
            Route::prefix('/user/')->middleware('user_role:SUPERADMIN')->group(function() {
                Route::match(['GET', 'POST'], 'get_users', [Masterlist::class, 'get_users']);
                Route::get('get_user_basic_info/{user_id}', [Masterlist::class, 'get_user_basic_info']);
                Route::get('get_user_activities/{user_id}', [Masterlist::class, 'get_user_activities']);
                Route::get('get_user_qr_reader_assignments/{user_id}', [Masterlist::class, 'get_user_qr_reader_assignments']);
                Route::post('qr_assignments', [Masterlist::class, 'qr_assignments']);
                Route::post('create_or_update_user', [Masterlist::class, 'create_or_update_user']);
                Route::delete('remove_qr_reader_assignment/{qr_reader_id}', [Masterlist::class, 'remove_qr_reader_assignment']);
                Route::delete('remove_user/{user_id}', [Masterlist::class, 'remove_user']);
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

            Route::prefix('/qr-reader/')->group(function() {
                Route::post('get_qr_readers', [Masterlist::class, 'get_qr_readers']);
                Route::post('get_qr_reader_records', [Masterlist::class, 'get_qr_reader_records']);
                Route::post('create_or_update_qr_reader', [Masterlist::class, 'create_or_update_qr_reader']);
                Route::delete('remove_qr_reader/{qr_reader_id}', [Masterlist::class, 'remove_qr_reader']);
            });
        });

        Route::prefix('/cashier/')->middleware('user_role:SUPERADMIN,CASHIER')->group(function() {
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

        Route::prefix('/recreational-activity/')->middleware('user_role:SUPERADMIN,ADMIN-RA')->group(function() {
            Route::post('ra_requests', [RecreationalActivityCtrl::class, 'ra_requests']);
            Route::post('ra_requests/get_requested_equipments', [RecreationalActivityCtrl::class, 'get_requested_equipments']);
            Route::post('ra_requests/get_requested_match_equipments', [RecreationalActivityCtrl::class, 'get_requested_match_equipments']);
            Route::post('ra_requests/issue_requested_equipments', [RecreationalActivityCtrl::class, 'issue_requested_equipments']);

            Route::post('ra_equipments', [RecreationalActivityCtrl::class, 'ra_equipments']);
            Route::post('ra_equipment_stock', [RecreationalActivityCtrl::class, 'ra_equipment_stock']);
            Route::post('ra_create_or_update_equipment', [RecreationalActivityCtrl::class, 'ra_create_or_update_equipment']);
            Route::post('ra_equipment_create_stock', [RecreationalActivityCtrl::class, 'ra_equipment_create_stock']);
            Route::delete('ra_remove_equipment/{equipment_id}', [RecreationalActivityCtrl::class, 'ra_remove_equipment']);
            Route::delete('ra_remove_equipment_stock/{equipment_stock_id}', [RecreationalActivityCtrl::class, 'ra_remove_equipment_stock']);

            Route::post('ra_facilities', [RecreationalActivityCtrl::class, 'ra_facilities']);
            Route::post('ra_create_or_update_facility', [RecreationalActivityCtrl::class, 'ra_create_or_update_facility']);
            Route::delete('ra_remove_facility/{facility_id}', [RecreationalActivityCtrl::class, 'ra_remove_facility']);
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
});


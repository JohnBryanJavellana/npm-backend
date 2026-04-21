<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Enums\UserRoleEnum;
use App\Http\Controllers\Controller;
use App\Services\Administrator\Dashboard\{
    DashboardAccountReportData,
    DashboardCashierReportData,
    DashboardDormitoryReportData,
    DashboardEnrollmentReportData,
    DashboardLibraryReportData,
    DashboardMasterlistReportData,
    DashboardModelInstances,
    DashboardRecreationalReportData
};
use App\Utils\TransactionUtil;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DashboardCtrl extends Controller
{
    public function __construct(
        public DashboardModelInstances $dashboardModelInstances,
        public DashboardEnrollmentReportData $dashboardEnrollmentReportData,
        public DashboardDormitoryReportData $dashboardDormitoryReportData,
        public DashboardLibraryReportData $dashboardLibraryReportData,
        public DashboardRecreationalReportData $dashboardRecreationalReportData,
        public DashboardMasterlistReportData $dashboardMasterlistReportData,
        public DashboardCashierReportData $dashboardCashierReportData,
        public DashboardAccountReportData $dashboardAccountReportData
    ) {}

    /**
     * Summary of dashboard_data
     * @param Request $request
     */
    public function dashboard_data(Request $request): JsonResponse
    {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $userRole = $request->user()->role;
            $givenYear = $request->year;

            $modelInstances = $this->dashboardModelInstances->modelInstances($givenYear);
            $reportData = [];

            if(\in_array($userRole, [UserRoleEnum::SUPERADMIN->value, UserRoleEnum::ADMIN_ENROLLMENT->value])) {
                $reportData['enrollmentReportData'] = $this->dashboardEnrollmentReportData->enrollmentReportData(
                    $modelInstances['enrolledCourseInstance'],
                    $modelInstances['trainingInstance'],
                    $modelInstances['enrollmentInvoiceInstance']
                );
            }

            if(\in_array($userRole, [UserRoleEnum::SUPERADMIN->value, UserRoleEnum::ADMIN_DORMITORY->value])) {
                $reportData['dormitoryReportData'] = $this->dashboardDormitoryReportData->dormitoryReportData(
                    $modelInstances['dormitoryTenantInstance'],
                    $modelInstances['dormitoryInventoryInstance'],
                    $modelInstances['dormitoryServiceInstance'],
                    $modelInstances['dormitoryInvoiceInstance']
                );
            }

            if(\in_array($userRole, [UserRoleEnum::SUPERADMIN->value, UserRoleEnum::ADMIN_LIBRARY->value])) {
                $reportData['libraryReportData'] = $this->dashboardLibraryReportData->libraryReportData(
                    $modelInstances['bookResInstance'],
                    $modelInstances['bookCopyInstance'],
                    $modelInstances['notificationInstance']
                );
            }

            if(\in_array($userRole, [UserRoleEnum::SUPERADMIN->value, UserRoleEnum::ADMIN_RA->value])) {
                $reportData['recreationalReportData'] = $this->dashboardRecreationalReportData->recreationalReportData(
                    $modelInstances['recreationalInstance']
                );
            }

            if(\in_array($userRole, [UserRoleEnum::SUPERADMIN->value])) {
                $reportData['masterlistReportData'] = $this->dashboardMasterlistReportData->masterlistReportData(
                    $modelInstances['userInstance'],
                    $modelInstances['employerInstance']
                );
            }

            if(\in_array($userRole, [UserRoleEnum::SUPERADMIN->value, UserRoleEnum::CASHIER->value])) {
                $reportData['cashierReportData'] = $this->dashboardCashierReportData->cashierReportData(
                    $modelInstances['dormitoryInvoiceInstance'],
                    $modelInstances['enrollmentInvoiceInstance'],
                    $modelInstances['libraryInvoiceInstance'],
                    $modelInstances['raInvoiceInvoiceInstance'],
                    $modelInstances['cashierORInstance']
                );
            }

            $reportData['accountReportData'] = $this->dashboardAccountReportData->accountReportData($request, $modelInstances['auditTrailInstance']);

            return response()->json(['reportData' => $reportData], 200);
        });
    }
}

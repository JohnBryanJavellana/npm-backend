<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Enums\NotificationEnum;
use App\Http\Controllers\Controller;
use App\Utils\TransactionUtil;
use Illuminate\Http\Request;
use App\Enums\Administrator\{
    EnrollmentEnum,
    LibraryEnum,
    DormitoryEnum,
    RAEnum,
    CashierEnum
};
use App\Models\{
    User,
    RARequestInfo,
    DormitoryTenant,
    EnrolledCourse,
    DormitoryInvoice,
    EnrollmentInvoice,
    LibraryInvoice,
    RAInvoices,
    BookRes,
    Training,
    BookCopy,
    DormitoryInventory,
    DormitoryReqService,
    Notification,
    Employer,
    AuditTrail,
    QrReaderLocation
};
use Carbon\Carbon;

class DashboardCtrl extends Controller
{
    /**
     * Summary of count_document
     * @param mixed $model
     * @param mixed $condition
     */
    protected function count_document($model, $conditionColumn = null, $condition = null) {
        $modelTemp = $model;
        if($condition && $conditionColumn) $modelTemp->whereIn($conditionColumn, $condition);
        return $modelTemp->count();
    }

    /**
     * Summary of dashboard_data
     * @param Request $request
     */
    public function dashboard_data(Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $givenYear = $request->input('year', null);

            $userInstance = User::query();
            $auditTrailInstance = AuditTrail::query();
            $qrReaderLocationInstance = QrReaderLocation::query();
            $enrolledCourseInstance = EnrolledCourse::query();
            $employerInstance = Employer::query();
            $bookResInstance = BookRes::query();
            $bookCopyInstance = BookCopy::query();
            $trainingInstance = Training::query();
            $recreationalInstance = RARequestInfo::query();
            $dormitoryInstance = DormitoryTenant::query();
            $notificationInstance = Notification::query();
            $dormitoryServiceInstance = DormitoryReqService::query();
            $dormitoryInventoryInstance = DormitoryInventory::query();
            $dormitoryInvoiceInstance = DormitoryInvoice::query();
            $enrollmentInvoiceInstance = EnrollmentInvoice::query();
            $libraryInvoiceInstance = LibraryInvoice::query();
            $raInvoiceInvoiceInstance = RAInvoices::query();

            if($givenYear !== null) {
                $employerInstance->whereYear('created_at', $givenYear);
                $notificationInstance->whereYear('created_at', $givenYear);
                $bookCopyInstance->whereYear('created_at', $givenYear);
                $userInstance->whereYear('created_at', $givenYear);
                $dormitoryInstance->whereYear('created_at', $givenYear);
                $recreationalInstance->whereYear('created_at', $givenYear);
                $enrolledCourseInstance->whereYear('created_at', $givenYear);
                $dormitoryInvoiceInstance->whereYear('created_at', $givenYear);
                $dormitoryServiceInstance->whereYear('created_at', $givenYear);
                $enrollmentInvoiceInstance->whereYear('created_at', $givenYear);
                $libraryInvoiceInstance->whereYear('created_at', $givenYear);
                $raInvoiceInvoiceInstance->whereYear('created_at', $givenYear);
                $bookResInstance->whereYear('created_at', $givenYear);
                $trainingInstance->whereYear('created_at', $givenYear);
            }

            /** CARDS */
            $totalEnrollmentApplications = $enrolledCourseInstance->clone()->count();
            $totalPaymentTransactions = $this->count_document($dormitoryInvoiceInstance->clone()) +
                $this->count_document($enrollmentInvoiceInstance->clone()) +
                $this->count_document($libraryInvoiceInstance->clone()) +
                $this->count_document($raInvoiceInvoiceInstance->clone());
            $totalDormitoryApplications = $dormitoryInstance->clone()->count();
            $totalLibraryApplications = $bookResInstance->clone()->count();
            $totalRecreationalApplications = $recreationalInstance->clone()->count();
            $totalUserRegistration = $userInstance->clone()->count();

            /** ENROLLMENT OVERVIEW */
            $targetDate = Carbon::now()->subMonth();
            $trends = $enrolledCourseInstance
                ->whereMonth('created_at', $targetDate->month)
                ->whereYear('created_at', $targetDate->year)
                ->get()
                ->groupBy(fn($item) => Carbon::parse($item->created_at)->weekOfMonth);

            $enrollmentTrend = collect(range(1, 5))->map(function ($weekNumber) use ($trends) {
                return [
                    'week'  => "Week $weekNumber",
                    'count' => isset($trends[$weekNumber]) ? $trends[$weekNumber]->count() : 0,
                ];
            })->values();

            $topPopularCourse = $trainingInstance->with('module')
                ->has('hasData')
                ->withCount(['hasData'])
                ->orderByDesc('has_data_count')
                ->take(10)
                ->get()
                ->map(fn($query) => [
                    'course' => $query->module?->acronym,
                    'count' => $query->has_data_count
                ])->values();

            $enrollmentPayments = [
                'PENDING' => $this->count_document($enrollmentInvoiceInstance->clone(), 'invoice_status', [CashierEnum::PENDING]),
                'FOR VERIFICATION' => $this->count_document($enrollmentInvoiceInstance->clone(), 'invoice_status', [CashierEnum::FOR_VERIFICATION]),
                'PAID' => $this->count_document($enrollmentInvoiceInstance->clone(), 'invoice_status', [CashierEnum::PAID]),
                'CANCELLED' => $this->count_document($enrollmentInvoiceInstance->clone(), 'invoice_status', [CashierEnum::CANCELLED])
            ];

            /** DORMITORY OVERVIEW */
            $dormitoryOccupancy = [
                'PENDING' => $this->count_document($dormitoryInstance->clone(), 'tenant_status', [DormitoryEnum::PENDING]),
                'APPROVED' => $this->count_document($dormitoryInstance->clone(), 'tenant_status', [DormitoryEnum::APPROVED]),
                'TERMINATED' => $this->count_document($dormitoryInstance->clone(), 'tenant_status', [DormitoryEnum::TERMINATED]),
                'ACTIVE' => $this->count_document($dormitoryInstance->clone(), 'tenant_status', [DormitoryEnum::ACTIVE]),
                'CANCELLED' => $this->count_document($dormitoryInstance->clone(), 'tenant_status', [DormitoryEnum::CANCELLED]),
                'EXTENDING' => $this->count_document($dormitoryInstance->clone(), 'tenant_status', [DormitoryEnum::EXTENDING]),
                'TRANSFERRING' => $this->count_document($dormitoryInstance->clone(), 'tenant_status', [DormitoryEnum::TRANSFERRING]),
                'TRANSFERRED' => $this->count_document($dormitoryInstance->clone(), 'tenant_status', [DormitoryEnum::TRANSFERRED]),
                'FOR PAYMENT' => $this->count_document($dormitoryInstance->clone(), 'tenant_status', [DormitoryEnum::FOR_PAYMENT]),
                'REJECTED' => $this->count_document($dormitoryInstance->clone(), 'tenant_status', [DormitoryEnum::REJECTED]),
                'PAID' => $this->count_document($dormitoryInstance->clone(), 'tenant_status', [DormitoryEnum::PAID]),
                'PROCESSING PAYMENT' => $this->count_document($dormitoryInstance->clone(), 'tenant_status', [DormitoryEnum::PROCESSING_PAYMENT]),
                'RESERVED' => $this->count_document($dormitoryInstance->clone(), 'tenant_status', [DormitoryEnum::RESERVED])
            ];

            $annualDormitoryRequest = [];
            for ($m = 1; $m <= 12; $m++) {
                $annualDormitoryRequest[date('M', mktime(0, 0, 0, $m, 1))] = 0;
            }

            $annualDormitoryRequestTemp = $dormitoryInstance->clone()->get();
            foreach ($annualDormitoryRequestTemp as $requestTemp) {
                $month = $requestTemp->created_at->format('M');
                if (isset($annualDormitoryRequest[$month])) {
                    $annualDormitoryRequest[$month]++;
                }
            }

            $finalData = [];
            foreach ($annualDormitoryRequest as $name => $total) {
                $finalData[] = [
                    'month' => $name,
                    'count' => $total
                ];
            }

            $inventoryAlerts = $dormitoryInventoryInstance->clone()
                ->with('stock')
                ->withCount([
                    'stock as available_count' => fn($query) => $query->where('status', 'AVAILABLE'),
                    'stock as total_stock_count'
                ])
                ->havingRaw('available_count <= (total_stock_count * 0.50)')
                ->orderBy('available_count', 'ASC')
                ->take(3)
                ->get()
                ->map(fn($item) => [
                    'item'          => $item->name,
                    'total_count'   => $item->total_stock_count,
                    'available'     => $item->available_count,
                    'status'        => $item->available_count === 0 ? 'Out of Stock' : 'Low Stock',
                ])
                ->values();

            $serviceRequestStatus = $dormitoryServiceInstance->clone()
                ->with(['services'])
                ->orderBy('created_at', 'DESC')
                ->take(3)
                ->get()
                ->map(fn($query) => [
                    'id' => $query->id,
                    'service' => $query->services->name,
                    'status' => $query->status,
                    'remarks' => $query->remarks
                ])
                ->values();

            $dormitoryPayments = [
                'PENDING' => $this->count_document($dormitoryInvoiceInstance->clone(), 'invoice_status', [CashierEnum::PENDING]),
                'FOR VERIFICATION' => $this->count_document($dormitoryInvoiceInstance->clone(), 'invoice_status', [CashierEnum::FOR_VERIFICATION]),
                'PAID' => $this->count_document($dormitoryInvoiceInstance->clone(), 'invoice_status', [CashierEnum::PAID]),
                'CANCELLED' => $this->count_document($dormitoryInvoiceInstance->clone(), 'invoice_status', [CashierEnum::CANCELLED])
            ];

            /** LIBRARY OVERVIEW */
            $libraryHealthCount = [
                'total' => $bookCopyInstance->clone()->count(),
                'available' => $bookCopyInstance->clone()->where('status', 'AVAILABLE')->count(),
            ];

            $actionCenter = [
                'overdue' => 0,
                'new_reservations' => $this->count_document($bookResInstance->clone(), 'status', [LibraryEnum::ACTIVE])
            ];

            $recentActivity = $notificationInstance->clone()
                ->with('sender')
                ->where('type', NotificationEnum::LIBRARY)
                ->orderBy('created_at', 'DESC')
                ->take(3)
                ->get();

            /** RECREATIONAL OVERVIEW */
            $raApplications = [
                'PENDING' => $this->count_document($recreationalInstance->clone(), 'status', [RAEnum::PENDING]),
                'FOR CSM' => $this->count_document($recreationalInstance->clone(), 'status', [RAEnum::FOR_CSM]),
                'ACTIVE' => $this->count_document($recreationalInstance->clone(), 'status', [RAEnum::ACTIVE]),
                'COMPLETED' => $this->count_document($recreationalInstance->clone(), 'status', [RAEnum::COMPLETED])
            ];

            /** MASTERLIST OVERVIEW */
            $totalEmployer = [
                'total' => $this->count_document($employerInstance->clone()),
                'this_month' => $employerInstance->clone()->whereMonth('created_at', Carbon::now()->format('m'))->count()
            ];

            $userStatus = [
                'VERIFIED' => $userInstance->clone()->whereNotNull('email_verified_at')->count(),
                'UNVERIFIED' => $userInstance->clone()->whereNull('email_verified_at')->count()
            ];

            /** CASHIER OVERVIEW */
            $cashierCounts = [
                'orNumbers' => $this->count_document($qrReaderLocationInstance->clone()),
                'pendingPayment' => $this->count_document($dormitoryInvoiceInstance->clone(), 'invoice_status', [CashierEnum::PENDING]) +
                                    $this->count_document($enrollmentInvoiceInstance->clone(), 'invoice_status', [CashierEnum::PENDING]) +
                                    $this->count_document($libraryInvoiceInstance->clone(), 'invoice_status', [CashierEnum::PENDING]) +
                                    $this->count_document($raInvoiceInvoiceInstance->clone(), 'invoice_status', [CashierEnum::PENDING]),
                'verifiedPayment' => $this->count_document($dormitoryInvoiceInstance->clone(), 'invoice_status', [CashierEnum::PAID]) +
                                    $this->count_document($enrollmentInvoiceInstance->clone(), 'invoice_status', [CashierEnum::PAID]) +
                                    $this->count_document($libraryInvoiceInstance->clone(), 'invoice_status', [CashierEnum::PAID]) +
                                    $this->count_document($raInvoiceInvoiceInstance->clone(), 'invoice_status', [CashierEnum::PAID])
            ];

            /** ACCOUNT OVERVIEW */
            $accountActions = [
                'email' => $request->user()->email,
                'audit_trails' => $auditTrailInstance->clone()
                    ->where('user_id', $request->user()->id)
                    ->count()
            ];

            $insights = [
                // cards
                'totalEnrollmentApplications' => $totalEnrollmentApplications,
                'totalPaymentTransactions' => $totalPaymentTransactions,
                'totalDormitoryApplications' => $totalDormitoryApplications,
                'totalLibraryApplications' => $totalLibraryApplications,
                'totalRecreationalApplications' => $totalRecreationalApplications,
                'totalUserRegistration' => $totalUserRegistration,
                // enrollment overview
                'enrollmentTrend' => $enrollmentTrend,
                'topPopularCourse' => $topPopularCourse,
                'enrollmentPayments' => $enrollmentPayments,
                // dormitory overview
                'dormitoryOccupancy' => $dormitoryOccupancy,
                'annualDormitoryRequest' => $finalData,
                'inventoryAlerts' => $inventoryAlerts,
                'serviceRequestStatus' => $serviceRequestStatus,
                'dormitoryPayments' => $dormitoryPayments,
                // library overview
                'libraryHealthCount' => $libraryHealthCount,
                'actionCenter' => $actionCenter,
                'recentActivity' => $recentActivity,
                // recreational overview
                'raApplications' => $raApplications,
                // masterlist overview
                'totalEmployer' => $totalEmployer,
                'userStatus' => $userStatus,
                // cashier overview
                'cashierCounts' => $cashierCounts,
                // account overview
                'accountActions' => $accountActions
            ];

            return response()->json(['insights' => $insights], 200);
        });
    }
}

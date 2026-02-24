<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Enums\Administrator\CashierEnum;
use App\Http\Controllers\Controller;
use App\Utils\TransactionUtil;
use Illuminate\Http\Request;
use App\Enums\Administrator\{
    EnrollmentEnum,
    LibraryEnum,
    DormitoryEnum,
    RAEnum
};
use App\Models\{
    EnrolledCourse,
    DormitoryInvoice,
    EnrollmentInvoice,
    LibraryInvoice,
    RAInvoices,
    BookRes,
    Training
};
use Carbon\Carbon;

class DashboardCtrl extends Controller
{
    /**
     * Summary of count_payment
     * @param mixed $model
     * @param mixed $condition
     */
    protected function count_payment($model, $condition) {
        return $model->whereIn('invoice_status', $condition)->count();
    }

    /**
     * Summary of dashboard_data
     * @param Request $request
     */
    public function dashboard_data(Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $givenYear = $request->input('year', null);

            $enrolledCourseInstance = EnrolledCourse::query();
            $dormitoryInvoiceInstance = DormitoryInvoice::query();
            $enrollmentInvoiceInstance = EnrollmentInvoice::query();
            $libraryInvoiceInstance = LibraryInvoice::query();
            $raInvoiceInvoiceInstance = RAInvoices::query();
            $bookResInstance = BookRes::query();
            $trainingInstance = Training::query();

            if($givenYear !== null) {
                $enrolledCourseInstance->whereYear('created_at', $givenYear);
                $dormitoryInvoiceInstance->whereYear('created_at', $givenYear);
                $enrollmentInvoiceInstance->whereYear('created_at', $givenYear);
                $libraryInvoiceInstance->whereYear('created_at', $givenYear);
                $raInvoiceInvoiceInstance->whereYear('created_at', $givenYear);
                $bookResInstance->whereYear('created_at', $givenYear);
                $trainingInstance->whereYear('created_at', $givenYear);
            }

            $activeTrainees = $enrolledCourseInstance->clone()->whereNotIn('enrolled_course_status', [
                EnrollmentEnum::COMPLETED,
                EnrollmentEnum::CANCELLED,
                EnrollmentEnum::DECLINED,
                EnrollmentEnum::INCOMPLETE_REQUIREMENTS,
                EnrollmentEnum::COURSE_STATUS_FULLY_BOOKED
            ])->count();

            $pendingPayments = $this->count_payment($dormitoryInvoiceInstance->clone(), [DormitoryEnum::PENDING]) +
                               $this->count_payment($enrollmentInvoiceInstance->clone(), [EnrollmentEnum::PENDING]) +
                               $this->count_payment($libraryInvoiceInstance->clone(), [LibraryEnum::PENDING]) +
                               $this->count_payment($raInvoiceInvoiceInstance->clone(), [RAEnum::PENDING]);

            $dormOccupancy = 40;
            $libraryRequest = $bookResInstance->count();

            $targetDate = Carbon::now()->subMonth();
            $daysInMonth = $targetDate->daysInMonth;
            $trends = $enrolledCourseInstance
                ->whereMonth('created_at', $targetDate->month)
                ->whereYear('created_at', $targetDate->year)
                ->get()
                ->groupBy(fn($item) => Carbon::parse($item->created_at)->weekOfMonth);

            $enrollmentTrend = collect(range(1, 5))->map(function ($weekNumber) use ($trends, $daysInMonth) {
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
                'PENDING' => $this->count_payment($enrollmentInvoiceInstance->clone(), [CashierEnum::PENDING]),
                'FOR VERIFICATION' => $this->count_payment($enrollmentInvoiceInstance->clone(), [CashierEnum::FOR_VERIFICATION]),
                'PAID' => $this->count_payment($enrollmentInvoiceInstance->clone(), [CashierEnum::PAID]),
                'CANCELLED' => $this->count_payment($enrollmentInvoiceInstance->clone(), [CashierEnum::CANCELLED])
            ];

            $insights = [
                'activeTrainees' => $activeTrainees,
                'pendingPayments' => $pendingPayments,
                'dormOccupancy' => $dormOccupancy,
                'libraryRequest' => $libraryRequest,
                'enrollmentTrend' => $enrollmentTrend,
                'topPopularCourse' => $topPopularCourse,
                'enrollmentPayments' => $enrollmentPayments
            ];

            return response()->json(['insights' => $insights], 200);
        });
    }
}

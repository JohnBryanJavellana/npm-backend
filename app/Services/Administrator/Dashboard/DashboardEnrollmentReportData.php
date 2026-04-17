<?php

namespace App\Services\Administrator\Dashboard;
use App\Enums\Administrator\CashierEnum;
use App\Helpers\Administrator\General\CountCollection;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class DashboardEnrollmentReportData extends CountCollection
{
    /**
     * Summary of enrollmentReportData
     * @param Builder $enrollmentInstanceBuilder
     * @param Builder $trainingInstanceBuilder
     * @param Builder $enrollmentInvoiceBuilder
     * @return array{enrollmentPayments: array, enrollmentTrend: \Illuminate\Support\Collection, topPopularCourse: \Illuminate\Support\Collection, totalEnrollmentApplications: string}
     */
    public function enrollmentReportData(Builder $enrollmentInstanceBuilder, Builder $trainingInstanceBuilder, Builder $enrollmentInvoiceBuilder): array
    {
        $totalEnrollmentApplications = CountCollection::startCount($enrollmentInstanceBuilder->clone());

        $enrollmentTrend = $this->enrollmentTrend($enrollmentInstanceBuilder);
        $topPopularCourse = $this->topPopularCourse($trainingInstanceBuilder);
        $enrollmentPayments = $this->enrollmentPayments($enrollmentInvoiceBuilder);

        return [
            'totalEnrollmentApplications' => $totalEnrollmentApplications,
            'enrollmentTrend' => $enrollmentTrend,
            'topPopularCourse' => $topPopularCourse,
            'enrollmentPayments' => $enrollmentPayments
        ];
    }

    /**
     * Summary of enrollmentPayments
     * @param Builder $enrollmentInvoiceBuilder
     * @return array{CANCELLED: string, FOR VERIFICATION: string, PAID: string, PENDING: string}
     */
    private function enrollmentPayments(Builder $enrollmentInvoiceBuilder): array
    {
        return [
            'PENDING' => CountCollection::startCount($enrollmentInvoiceBuilder->clone()->where('invoice_status', CashierEnum::PENDING)),
            'FOR VERIFICATION' => CountCollection::startCount($enrollmentInvoiceBuilder->clone()->where('invoice_status', CashierEnum::FOR_VERIFICATION)),
            'PAID' => CountCollection::startCount($enrollmentInvoiceBuilder->clone()->where('invoice_status', CashierEnum::PAID)),
            'CANCELLED' => CountCollection::startCount($enrollmentInvoiceBuilder->clone()->where('invoice_status', CashierEnum::CANCELLED))
        ];
    }

    /**
     * Summary of enrollmentTrend
     * @param Builder $enrollmentInstanceBuilder
     * @return \Illuminate\Support\Collection<int, array{count: int, week: string>}
     */
    private function enrollmentTrend(Builder $enrollmentInstanceBuilder): Collection
    {
        $targetDate = Carbon::now()->subMonth();
        $trends = $enrollmentInstanceBuilder
            ->whereMonth('created_at', $targetDate->month)
            ->whereYear('created_at', $targetDate->year)
            ->get()
            ->groupBy(fn($item) => Carbon::parse($item->created_at)->weekOfMonth);

        $enrollmentTrend = collect(range(1, 5))->map(fn ($weekNumber) => [
            'week'  => "Week $weekNumber",
            'count' => isset($trends[$weekNumber]) ? $trends[$weekNumber]->count() : 0,
        ])->values();

        return $enrollmentTrend;
    }

    /**
     * Summary of topPopularCourse
     * @param Builder $trainingInstanceBuilder
     * @return \Illuminate\Support\Collection<int, array{count: mixed, course: mixed>}
     */
    private function topPopularCourse(Builder $trainingInstanceBuilder): Collection
    {
        $topPopularCourse = $trainingInstanceBuilder->with('module')
            ->has('hasData')
            ->withCount(['hasData'])
            ->orderByDesc('has_data_count')
            ->take(10)
            ->get()
            ->map(fn($query) => [
                'course' => $query->module?->acronym,
                'count' => $query->has_data_count
            ])->values();

        return $topPopularCourse;
    }
}

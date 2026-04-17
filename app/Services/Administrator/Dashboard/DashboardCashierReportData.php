<?php

namespace App\Services\Administrator\Dashboard;
use App\Enums\Administrator\CashierEnum;
use App\Helpers\Administrator\General\CountCollection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class DashboardCashierReportData extends CountCollection
{
    /**
     * Summary of cashierReportData
     * @param Builder $dormitoryInvoiceBuilder
     * @param Builder $enrollmentInvoiceBuilder
     * @param Builder $libraryInvoiceBuilder
     * @param Builder $raInvoiceInvoiceBuilder
     * @param Builder $cashierOrBuilder
     * @return array{cashierCounts: array{orNumbers: mixed, pendingPayment: mixed, verifiedPayment: mixed, totalPaymentTransactions: mixed}}
     */
    public function cashierReportData(
        Builder $dormitoryInvoiceBuilder,
        Builder $enrollmentInvoiceBuilder,
        Builder $libraryInvoiceBuilder,
        Builder $raInvoiceInvoiceBuilder,
        Builder $cashierOrBuilder
    ) {
        $totalPaymentTransactions = collect([
            CountCollection::startCount($dormitoryInvoiceBuilder->clone()),
            CountCollection::startCount($enrollmentInvoiceBuilder->clone()),
            CountCollection::startCount($libraryInvoiceBuilder->clone()),
            CountCollection::startCount($raInvoiceInvoiceBuilder->clone())
        ])->sum();

        $cashierCounts = $this->cashierCounts($dormitoryInvoiceBuilder, $enrollmentInvoiceBuilder, $libraryInvoiceBuilder, $raInvoiceInvoiceBuilder, $cashierOrBuilder);

        return [
            'totalPaymentTransactions' => $totalPaymentTransactions,
            'cashierCounts' => $cashierCounts
        ];
    }

    /**
     * Summary of cashierCounts
     * @param Builder $dormitoryInvoiceBuilder
     * @param Builder $enrollmentInvoiceBuilder
     * @param Builder $libraryInvoiceBuilder
     * @param Builder $raInvoiceInvoiceBuilder
     * @param Builder $cashierOrBuilder
     * @return array{orNumbers: mixed, pendingPayment: mixed, verifiedPayment: mixed}
     */
    private function cashierCounts(
        Builder $dormitoryInvoiceBuilder,
        Builder $enrollmentInvoiceBuilder,
        Builder $libraryInvoiceBuilder,
        Builder $raInvoiceInvoiceBuilder,
        Builder $cashierOrBuilder
    ) {
        return [
            'orNumbers' => CountCollection::startCount($cashierOrBuilder->clone()),

            'pendingPayment' => collect([
                CountCollection::startCount($dormitoryInvoiceBuilder->clone()->where('invoice_status', CashierEnum::PENDING)),
                CountCollection::startCount($enrollmentInvoiceBuilder->clone()->where('invoice_status', CashierEnum::PENDING)),
                CountCollection::startCount($libraryInvoiceBuilder->clone()->where('invoice_status', CashierEnum::PENDING)),
                CountCollection::startCount($raInvoiceInvoiceBuilder->clone()->where('invoice_status', CashierEnum::PENDING))
            ])->sum(),

            'verifiedPayment' => collect([
                CountCollection::startCount($dormitoryInvoiceBuilder->clone()->where('invoice_status', CashierEnum::PAID)),
                CountCollection::startCount($enrollmentInvoiceBuilder->clone()->where('invoice_status', CashierEnum::PAID)),
                CountCollection::startCount($libraryInvoiceBuilder->clone()->where('invoice_status', CashierEnum::PAID)),
                CountCollection::startCount($raInvoiceInvoiceBuilder->clone()->where('invoice_status', CashierEnum::PAID))
            ])->sum()
        ];
    }
}

<?php

namespace App\Services\Administrator\Dashboard;
use App\Enums\Administrator\CashierEnum;
use App\Enums\Administrator\DormitoryEnum;
use App\Helpers\Administrator\General\CountCollection;
use Illuminate\Database\Eloquent\Builder;

class DashboardDormitoryReportData extends CountCollection
{
    /**
     * Summary of dormitoryReportData
     * @param Builder $dormitoryTenantBuilder
     * @param Builder $dormitoryInventoryBuilder
     * @param Builder $dormitoryServiceBuilder
     * @param Builder $dormitoryInvoiceBuilder
     * @return array{dormitoryPaymentsData: array, dormitoryTenantOccupancy: array, inventoryAlerts: \Illuminate\Support\Collection, monthlyOccupancyData: array, serviceRequestStatus: \Illuminate\Support\Collection, totalDormitoryApplications: int}
     */
    public function dormitoryReportData(
        Builder $dormitoryTenantBuilder,
        Builder $dormitoryInventoryBuilder,
        Builder $dormitoryServiceBuilder,
        Builder $dormitoryInvoiceBuilder
    ) {
        $totalDormitoryApplications = $dormitoryTenantBuilder->clone()->count();
        $dormitoryTenantOccupancy = $this->dormitoryTenantOccupancy($dormitoryTenantBuilder);
        $monthlyOccupancyData = $this->monthlyOccupancyData($dormitoryTenantBuilder);
        $dormitoryPaymentsData = $this->dormitoryPaymentsData($dormitoryInvoiceBuilder);
        $inventoryAlerts = $this->inventoryAlerts($dormitoryInventoryBuilder);
        $serviceRequestStatus = $this->serviceRequestStatus($dormitoryServiceBuilder);

        return [
            'totalDormitoryApplications' => $totalDormitoryApplications,
            'dormitoryTenantOccupancy' => $dormitoryTenantOccupancy,
            'monthlyOccupancyData' => $monthlyOccupancyData,
            'inventoryAlerts' => $inventoryAlerts,
            'serviceRequestStatus' => $serviceRequestStatus,
            'dormitoryPaymentsData' => $dormitoryPaymentsData
        ];
    }

    /**
     * Summary of dormitoryTenantOccupancy
     * @param Builder $dormitoryTenantBuilder
     * @return array{ACTIVE: mixed, APPROVED: mixed, CANCELLED: mixed, EXTENDING: mixed, FOR PAYMENT: mixed, PAID: mixed, PENDING: mixed, PROCESSING PAYMENT: mixed, REJECTED: mixed, RESERVED: mixed, TERMINATED: mixed, TRANSFERRED: mixed, TRANSFERRING: mixed}
     */
    private function dormitoryTenantOccupancy(Builder $dormitoryTenantBuilder) {
        return [
            'PENDING' => CountCollection::startCount($dormitoryTenantBuilder->clone()->where('tenant_status', DormitoryEnum::PENDING)),
            'APPROVED' => CountCollection::startCount($dormitoryTenantBuilder->clone()->where('tenant_status', DormitoryEnum::APPROVED)),
            'TERMINATED' => CountCollection::startCount($dormitoryTenantBuilder->clone()->where('tenant_status', DormitoryEnum::TERMINATED)),
            'ACTIVE' => CountCollection::startCount($dormitoryTenantBuilder->clone()->where('tenant_status', DormitoryEnum::ACTIVE)),
            'CANCELLED' => CountCollection::startCount($dormitoryTenantBuilder->clone()->where('tenant_status', DormitoryEnum::CANCELLED)),
            'EXTENDING' => CountCollection::startCount($dormitoryTenantBuilder->clone()->where('tenant_status', DormitoryEnum::EXTENDING)),
            'TRANSFERRING' => CountCollection::startCount($dormitoryTenantBuilder->clone()->where('tenant_status', DormitoryEnum::TRANSFERRING)),
            'TRANSFERRED' => CountCollection::startCount($dormitoryTenantBuilder->clone()->where('tenant_status', DormitoryEnum::TRANSFERRED)),
            'FOR PAYMENT' => CountCollection::startCount($dormitoryTenantBuilder->clone()->where('tenant_status', DormitoryEnum::FOR_PAYMENT)),
            'REJECTED' => CountCollection::startCount($dormitoryTenantBuilder->clone()->where('tenant_status', DormitoryEnum::REJECTED)),
            'PAID' => CountCollection::startCount($dormitoryTenantBuilder->clone()->where('tenant_status', DormitoryEnum::PAID)),
            'PROCESSING PAYMENT' => CountCollection::startCount($dormitoryTenantBuilder->clone()->where('tenant_status', DormitoryEnum::PROCESSING_PAYMENT)),
            'RESERVED' => CountCollection::startCount($dormitoryTenantBuilder->clone()->where('tenant_status', DormitoryEnum::RESERVED))
        ];
    }

    /**
     * Summary of monthlyOccupancyData
     * @param Builder $dormitoryTenantBuilder
     * @return array{count: int, month: mixed[]}
     */
    private function monthlyOccupancyData(Builder $dormitoryTenantBuilder) {
        $annualDormitoryRequest = [];
        for ($m = 1; $m <= 12; $m++) {
            $annualDormitoryRequest[date('M', mktime(0, 0, 0, $m, 1))] = 0;
        }

        $annualDormitoryRequestTemp = $dormitoryTenantBuilder->clone()->get();
        foreach ($annualDormitoryRequestTemp as $requestTemp) {
            $month = $requestTemp->created_at->format('M');
            if (isset($annualDormitoryRequest[$month])) {
                $annualDormitoryRequest[$month]++;
            }
        }

        $finalData = [];
        foreach ($annualDormitoryRequest as $name => $total) {
            $finalData[] = ['month' => $name, 'count' => $total];
        }

        return $finalData;
    }

    /**
     * Summary of inventoryAlerts
     * @param Builder $dormitoryInventoryBuilder
     * @return \Illuminate\Support\Collection<int, array{available: mixed, item: mixed, status: string, total_count: mixed>}
     */
    private function inventoryAlerts (Builder $dormitoryInventoryBuilder) {
        $inventoryAlerts = $dormitoryInventoryBuilder->clone()
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

        return $inventoryAlerts;
    }

    /**
     * Summary of serviceRequestStatus
     * @param Builder $dormitoryServiceBuilder
     * @return \Illuminate\Support\Collection<int, array{id: mixed, remarks: mixed, service: mixed, status: mixed>}
     */
    private function serviceRequestStatus (Builder $dormitoryServiceBuilder) {
        $serviceRequestStatus = $dormitoryServiceBuilder->clone()
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

        return $serviceRequestStatus;
    }

    /**
     * Summary of dormitoryPaymentsData
     * @param Builder $dormitoryInvoiceBuilder
     * @return array{CANCELLED: mixed, FOR VERIFICATION: mixed, PAID: mixed, PENDING: mixed}
     */
    private function dormitoryPaymentsData (Builder $dormitoryInvoiceBuilder) {
        return [
            'PENDING' => CountCollection::startCount($dormitoryInvoiceBuilder->clone()->where('invoice_status', CashierEnum::PENDING)),
            'FOR VERIFICATION' => CountCollection::startCount($dormitoryInvoiceBuilder->clone()->where('invoice_status', CashierEnum::FOR_VERIFICATION)),
            'PAID' => CountCollection::startCount($dormitoryInvoiceBuilder->clone()->where('invoice_status', CashierEnum::PAID)),
            'CANCELLED' => CountCollection::startCount($dormitoryInvoiceBuilder->clone()->where('invoice_status', CashierEnum::CANCELLED))
        ];
    }
}

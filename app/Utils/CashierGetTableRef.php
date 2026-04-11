<?php

namespace App\Utils;

use App\Models\AuditTrail;
use App\Models\BookRes;
use App\Models\DormitoryInvoice;
use App\Models\DormitoryReqService;
use App\Models\DormitoryTenant;
use App\Models\EnrolledCourse;
use App\Models\EnrollmentInvoice;
use App\Models\LibraryInvoice;
use App\Models\RAInvoices;
use App\Models\RARequestInfo;

class CashierGetTableRef
{
    public static function getTable(string $service, ?int $referenceId, ?array $whereIns)
    {
        $modelMap = [
            'ENROLLMENT' => EnrollmentInvoice::class,
            'ENROLLMENT-MAIN-TABLE' => EnrolledCourse::class,
            'RECREATIONAL' => RAInvoices::class,
            'RECREATIONAL-MAIN-TABLE' => RARequestInfo::class,
            'LIBRARY' => LibraryInvoice::class,
            'LIBRARY-MAIN-TABLE' => BookRes::class,
            'DORMITORY' => DormitoryInvoice::class,
            'DORMITORY-MAIN-TABLE' => DormitoryTenant::class,
            'DORMITORY-SERVICE' => DormitoryInvoice::class,
            'DORMITORY-SERVICE-MAIN-TABLE' => DormitoryReqService::class
        ];

        $query = $modelMap[$service]::query();

        if ($referenceId) {
            $query->where('id', $referenceId);
        }

        if($whereIns !== null) {
            foreach ($whereIns as $column => $values) {
                if (!empty($values)) {
                    $query->whereIn($column, $values);
                }
            }
        }

        return $query;
    }
}

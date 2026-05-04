<?php

namespace App\Utils;

use App\Models\AuditTrail;
use App\Models\BookRes;
use App\Models\DormitoryExtensionRequest;
use App\Models\DormitoryInclusionRequest;
use App\Models\DormitoryInvoice;
use App\Models\DormitoryReqService;
use App\Models\DormitoryTenant;
use App\Models\DormitoryTransfer;
use App\Models\EnrolledCourse;
use App\Models\EnrollmentInvoice;
use App\Models\LibraryInvoice;
use App\Models\RAInvoices;
use App\Models\RARequestInfo;

class CashierGetTableRef
{
    public static function getTable(string $service, ?int $referenceId, ?array $whereIns, ?array $specificWhere = [])
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
            'DORMITORY-SERVICE-MAIN-TABLE' => DormitoryReqService::class,
            'DORMITORY-INCLUSION' => DormitoryInvoice::class,
            'DORMITORY-INCLUSION-MAIN-TABLE' => DormitoryInclusionRequest::class,
            'DORMITORY-EXTENSION' => DormitoryInvoice::class,
            'DORMITORY-EXTENSION-MAIN-TABLE' => DormitoryExtensionRequest::class,
            'DORMITORY-TRANSFER' => DormitoryInvoice::class,
            'DORMITORY-TRANSFER-MAIN-TABLE' => DormitoryTransfer::class,
            'DORMITORY-OTHERS' => DormitoryInvoice::class
        ];

        $query = $modelMap[$service]::query();

        if ($referenceId) {
            $query->where('id', $referenceId);
        }

        if($whereIns !== null) {
            $query->whereIn("invoice_status", $whereIns);
        }

        return $query;
    }
}

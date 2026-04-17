<?php

namespace App\Services\Administrator\Dashboard;
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
    AuditTrail, CashierOR,
    QrReaderLocation
};

class DashboardModelInstances
{
    /**
     * Summary of modelInstances
     * @return array{
     * auditTrailInstance: \Illuminate\Database\Eloquent\Builder<AuditTrail>,
     * bookCopyInstance: \Illuminate\Database\Eloquent\Builder<BookCopy>,
     * bookResInstance: \Illuminate\Database\Eloquent\Builder<BookRes>,
     * dormitoryInstance: \Illuminate\Database\Eloquent\Builder<DormitoryTenant>,
     * dormitoryInventoryInstance: \Illuminate\Database\Eloquent\Builder<DormitoryInventory>,
     * dormitoryInvoiceInstance: \Illuminate\Database\Eloquent\Builder<DormitoryInvoice>,
     * dormitoryServiceInstance: \Illuminate\Database\Eloquent\Builder<DormitoryReqService>,
     * employerInstance: \Illuminate\Database\Eloquent\Builder<Employer>,
     * enrolledCourseInstance: \Illuminate\Database\Eloquent\Builder<EnrolledCourse>,
     * enrollmentInvoiceInstance: \Illuminate\Database\Eloquent\Builder<EnrollmentInvoice>,
     * libraryInvoiceInstance: \Illuminate\Database\Eloquent\Builder<LibraryInvoice>,
     * notificationInstance: \Illuminate\Database\Eloquent\Builder<Notification>,
     * qrReaderLocationInstance: \Illuminate\Database\Eloquent\Builder<QrReaderLocation>,
     * raInvoiceInvoiceInstance: \Illuminate\Database\Eloquent\Builder<RAInvoices>,
     * recreationalInstance: \Illuminate\Database\Eloquent\Builder<RARequestInfo>,
     * trainingInstance: \Illuminate\Database\Eloquent\Builder<Training>,
     * userInstance: \Illuminate\Database\Eloquent\Builder<User>
     * }
     */
    public function modelInstances(?int $givenYear): array
    {
        $instances = [
            "userInstance" => User::query(),
            "employerInstance" => Employer::query(),
            "auditTrailInstance" => AuditTrail::query(),
            "cashierORInstance" => CashierOR::query(),
            "enrolledCourseInstance" => EnrolledCourse::query(),
            "bookResInstance" => BookRes::query(),
            "bookCopyInstance" => BookCopy::query(),
            "notificationInstance" => Notification::query(),
            "libraryInvoiceInstance" => LibraryInvoice::query(),
            "recreationalInstance" => RARequestInfo::query(),
            "dormitoryTenantInstance" => DormitoryTenant::query(),
            "dormitoryServiceInstance" => DormitoryReqService::query(),
            "dormitoryInventoryInstance" => DormitoryInventory::query(),
            "dormitoryInvoiceInstance" => DormitoryInvoice::query(),
            "trainingInstance" => Training::query(),
            "enrollmentInvoiceInstance" => EnrollmentInvoice::query(),
            "raInvoiceInvoiceInstance" => RAInvoices::query()
        ];

        if($givenYear) {
            foreach($instances as $i) {
                $i->whereYear('created_at', $givenYear);
            }
        }

        return $instances;
    }
}

<?php

namespace App\Services\Trainee\Dormitory;

use App\Models\{
    DormitoryInventory,
    DormitoryRoom,
    DormitoryTenant,
    DormitoryTenantHistory,
    DormitoryItemBorrowing
};
use App\Enums\RequestStatus;
use App\Utils\AuditHelper;
use App\Utils\GenerateTrace;
use App\Utils\SaveFile;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use DomainException;


class DormitoryRequestService {

    private const LONG_TTL = 600;
    private const SHORT_TTL = 30;
    private const PREFIX = "-DR-";

    public function __construct(
        protected DormitoryRoom $roomModel,
        protected DormitoryTenant $tenantModel,
        protected DormitoryTenantHistory $dormitoryTenantHistory,
        protected DormitoryInventory $dormitoryInventory,
        protected DormitoryItemBorrowing $dormitoryItemBorrowing,
    ) {}

    public function viewUserRequest($userId, $traceNumber)
    {
        $cacheKey = "a$userId";
        return Cache::remember($cacheKey, self::LONG_TTL, function() {

        });
    }

    public function viewApplication()
    {
        return;
    }

    public function createRequest($validated, $userId)
    {
        DB::transaction(function() use ($validated, $userId) {

            $this->validateData($userId);

            $data = [
                "user_id" => $userId,
                "room_for_type" => $validated["forType"],
                "trace_number" => GenerateTrace::createTraceNumber($this->tenantModel, self::PREFIX),
                "is_air_conditioned" => $validated["is_air_conditioned"],
                "single_accomodation" => $validated["single_accomodation"],
                "tenant_from_date" => $validated["startDate"],
                "tenant_to_date" => $validated["endDate"],
                "purpose" => $validated["purpose"],
            ];

            if($validated["forType"] === $this->tenantModel::COUPLE) {

                // $file_requested = $validated["file"];
                // $filename = GenerateUniqueFilename::generate($file_requested);
                // $file_requested->move(public_path('dormitory/supporting-document'), $filename);
                $data["filename"] = SaveFile::save($validated["file"], 'dormitory/supporting-document');
            }

            $record = $this->tenantModel->create($data);

            $this->loggingDetails(
                $record,
                $userId,
                "sent",
                "You’ve sent a dormitory request."
            );

        });
    }

    public function cancelRequest($request, $dormitory_id)
    {
        DB::transaction(function() use ($request, $dormitory_id) {
            $record = $this->tenantModel
            ->whereKey($dormitory_id)
            ->lockForUpdate()
            ->firstOrFail();

            if($record->tenant_status === RequestStatus::CANCELLED->value) {
                throw new DomainException(
                    "This dormitory request has already been cancelled."
                );
            }

            if(!in_array($record->tenant_status, [
                RequestStatus::PENDING->value,
                RequestStatus::APPROVED->value,
                RequestStatus::FOR_PAYMENT->value,
            ])) {
                throw new DomainException("Dormitory request cancellation is not permitted.");
            }

            if(!is_null($record->dormitory_room_id)) {
                $dorm = $this->roomModel
                ->find($record->dormitory_room_id)
                ->lockForUpdate();

                $dorm->update([
                    "room_available_slot" =>  $record->room_for_type === "COUPLE"
                        || $record->single_accommodation === "YES" ? 2 : 1,
                    "room_status" => RequestStatus::AVAILABLE->value
                ]);
            }
            if (
                $record->room_for_type === "COUPLE" &&
                $record->filename &&
                file_exists(public_path('marriage-files/' . $record->filename))
            ) {
                unlink(public_path('marriage-files/' . $record->filename));
            }

            $record->update([
                "tenant_status" => RequestStatus::CANCELLED->value
            ]);

            $this->loggingDetails(
                $record,
                $request->user()->id,
                "cancelled",
                "You cancelled your room dorm request."
            );
        });
    }

    private function validateData($userId) {
        $existing_request = $this->tenantModel
        ->where(['user_id' => $userId, 'tenant_status' => RequestStatus::PENDING->value])
        ->exists();

        if ($existing_request) {
            throw new DomainException("A request is already existing!");
        }
    }

    private function loggingDetails($record, $userId, $action, $reason) {

        AuditHelper::log($userId, "User $userId has $action a dorm room request.");

        $this->dormitoryTenantHistory->create([
            "dormitory_tenant_id" => $record->id,
            "history_reason" => $action,
        ]);
    }
}

<?php

namespace App\Services\Trainee\Dormitory;

use App\Models\{
    Dormitory,
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
use Illuminate\Support\Facades\DB;
use DomainException;


class DormitoryRequestService {

    private const LONG_TTL = 600;
    private const SHORT_TTL = 30;
    private const PREFIX = "-DR-";

    public function __construct(
        protected Dormitory $dormitoryModel,
        protected DormitoryRoom $roomModel,
        protected DormitoryTenant $tenantModel,
        protected DormitoryTenantHistory $dormitoryTenantHistory,
        protected DormitoryInventory $dormitoryInventory,
        protected DormitoryItemBorrowing $dormitoryItemBorrowing,
    ) {}


public function getRecommendedRoom($validated)
{
    $start = $validated['fromDate'];
    $end   = $validated['toDate'];

    $requiredSlots = $validated['single_accomodation'] === 'YES' ? 2 : 1;
    $capacity = 2;

    return $this->dormitoryModel->query()
        ->with([
            "room_images:id,dormitory_id,filename"
        ])

        ->where('room_fee_type', $validated["forType"])
        ->where('is_air_conditioned', $validated["roomType"])

        ->withCount([
            'tenants as overlapping_tenants_count' => function ($q) use ($start, $end) {
                $q->where('tenant_from_date', '<', $end)
                  ->where('tenant_to_date', '>', $start)
                  ->whereIn('tenant_status', ['APPROVED', 'ACTIVE']);
            }
        ])

        ->havingRaw("overlapping_tenants_count + ? <= ?", [$requiredSlots, $capacity])
        ->orderBy('overlapping_tenants_count', 'asc')
        ->orderBy('room_cost', 'asc')

        ->get([
            "id",
            "room_name",
            "room_cost",
            "guest_cost"
        ]);
}


    public function createRequest($validated, $userId)
    {
        DB::transaction(function() use ($validated, $userId) {

            $this->validateData($userId);

            $data = [
                "user_id" => $userId,
                // "room_for_type" => $validated["forType"],
                "dormitory_room_id" => $validated["room_id"] ?? null,
                "trace_number" => GenerateTrace::createTraceNumber($this->tenantModel, self::PREFIX),
                "is_air_conditioned" => $validated["is_air_conditioned"],
                "single_accomodation" => $validated["single_accomodation"],
                "tenant_from_date" => $validated["fromDate"],
                "tenant_to_date" => $validated["toDate"],
                "purpose" => $validated["purpose"],
            ];

            // if($validated["forType"] === $this->tenantModel::COUPLE) {
            //     $data["filename"] = SaveFile::save($validated["file"], 'dormitory/supporting-document');
            // }

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

            if($record->tenant_status === RequestStatus::CANCELLED) {
                throw new DomainException(
                    "This dormitory request has already been cancelled."
                );
            }

            if(!in_array($record->tenant_status, [
                RequestStatus::PENDING->value,
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
                    "room_status" => RequestStatus::AVAILABLE
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
                "tenant_status" => RequestStatus::CANCELLED
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
        ->where(['user_id' => $userId, 'tenant_status' => RequestStatus::PENDING])
        ->exists();

        if ($existing_request) {
            throw new DomainException("A request is already existing!");
        }
    }

    private function loggingDetails($record, $userId, $action, $reason) {

        AuditHelper::log($userId, "User $userId has $action a dorm room request.");

        $this->dormitoryTenantHistory->create([
            "dormitory_tenant_id" => $record->id,
            "history_reason" => $reason,
        ]);
    }
}

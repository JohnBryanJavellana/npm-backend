<?php

namespace App\Services\Trainee\Dormitory;

use App\Enums\Administrator\DormitoryEnum;
use App\Models\{
    Dormitory,
    DormitoryInventory,
    DormitoryRoom,
    DormitoryTenant,
    DormitoryTenantHistory,
    DormitoryItemBorrowing, DormitoryTenantSupDoc
};
use App\Enums\RequestStatus;
use App\Services\Administrator\Dormitory\DormitoryRoomManager;
use App\Services\Administrator\Dormitory\DormitoryRoomReservationManager;
use App\Utils\AuditHelper;
use App\Utils\GenerateTrace;
use App\Utils\SaveFile;
use Illuminate\Support\Facades\DB;
use DomainException;


class DormitoryRequestService
{

    private const LONG_TTL = 600;
    private const SHORT_TTL = 30;
    private const PREFIX = "-DR-";

    public function __construct(
        protected DormitoryRoom $roomModel,
        protected DormitoryTenant $tenantModel,
        protected DormitoryTenantHistory $dormitoryTenantHistory,
        protected DormitoryInventory $dormitoryInventory,
        protected DormitoryItemBorrowing $dormitoryItemBorrowing,
        protected DormitoryRoomReservationManager $dormitoryRoomReservationManager
    ) {}


    public function getRecommendedRoom($validated)
    {
        // $start = $validated['fromDate'];
        // $end   = $validated['toDate'];

        // $requiredSlots = $validated['single_accomodation'] === 'YES' ? 2 : 1;
        // $capacity = 2;

        return $this->roomModel->query()->with([
            "roomImages"
        ])->where([
            'room_type' => $validated["roomType"],
            'dormitory' => $validated["forType"],
            'accommodation' => $validated["accommodation"],
            'guest_gender' => $validated["guestGender"]
        ])->get();
    }


    public function createRequest($validated, $userId)
    {
        DB::transaction(function () use ($validated, $userId) {
            $this->validateData($userId);

            $data = [
                "user_id" => $userId,
                "dormitory_room_id" => $validated["room_id"] ?? null,
                "trace_number" => GenerateTrace::createTraceNumber($this->tenantModel, self::PREFIX),
                "room_type" => $validated["is_air_conditioned"],
                "accommodation" => $validated["single_accomodation"],
                "check_in_datetime" => $validated["fromDate"],
                "check_out_datetime" => $validated["toDate"],
                "purpose" => $validated["purpose"],
                "process_type" => "ONLINE",
                "status_of_occupancy" => "TRAINEE"
            ];

            $record = $this->tenantModel->create($data);

            if ($validated['accommodation'] === 'COUPLE' && isset($validated["file"])) {
                DormitoryTenantSupDoc::create([
                    'dormitory_tenant_id' => $record->id,
                    'filename' =>SaveFile::save($validated["file"], 'dormitory/supporting-document')
                ]);
            }

            $this->loggingDetails($record, $userId, "sent", "You've sent a dormitory request.");
        });
    }

    public function cancelRequest($request, $dormitory_id)
    {
        DB::transaction(function () use ($request, $dormitory_id) {
            $record = $this->tenantModel
                ->whereKey($dormitory_id)
                ->lockForUpdate()
                ->firstOrFail();

            if ($record->tenant_status === RequestStatus::CANCELLED) {
                throw new DomainException(
                    "This dormitory request has already been cancelled."
                );
            }

            if (!\in_array($record->tenant_status, [
                RequestStatus::PENDING->value,
                RequestStatus::FOR_PAYMENT->value,
            ])) {
                throw new DomainException("Dormitory request cancellation is not permitted.");
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

    private function validateData($userId)
    {
        $existing_request = $this->tenantModel->query()
            ->forUser($userId)
            ->active()
            ->exists();

        if ($existing_request) {
            throw new DomainException("A request is already existing!");
        }
    }

    private function loggingDetails($record, $userId, $action, $reason)
    {

        AuditHelper::log($userId, "User $userId has $action a dorm room request.");

        $this->dormitoryTenantHistory->create([
            "dormitory_tenant_id" => $record->id,
            "history_reason" => $reason,
        ]);
    }

    public function getDormRequestCount($userId)
    {
        return $this->tenantModel->query()
            ->select(DB::raw("count(*) as status_count"), "tenant_status")
            ->forUser($userId)
            ->groupBy("tenant_status")
            ->pluck("status_count", "tenant_status");
    }

    /**
     * Summary of requestDormitoryRoom
     * @param object $payload
     * @return array{message: string, status: int}
     */
    public function requestDormitoryRoom(object $payload, int $guestId) {
        $checkIfHasActiveRequest = DormitoryTenant::where('user_id', $guestId)
            ->whereNotIn('tenant_status', [
                DormitoryEnum::CANCELLED,
                DormitoryEnum::REJECTED,
                DormitoryEnum::TERMINATED
            ])
            ->first();

        if($checkIfHasActiveRequest) {
            return [
                'message' => "Can't create new request. You still have a $checkIfHasActiveRequest->tenant_status request.",
                'status' => 409
            ];
        }

        $preparedData = $payload->only([
            'dormitory_room_id',
            'user_id',
            'room_type',
            'accommodation',
            'purpose',
            'process_type',
            'check_in_datetime',
            'check_out_datetime',
            'status_of_occupancy'
        ]);
        $preparedData['trace_number'] = GenerateTrace::createTraceNumber(DormitoryTenant::class, '-DG-');
        $this_request = DormitoryTenant::create($preparedData);

        if($payload->accommodation === DormitoryEnum::COUPLE->value && isset($payload->suppportingCoupleDocuments)) {
            $dataToInsert = [];

            foreach ($payload->suppportingCoupleDocuments as $suppportingCoupleDocuments) {
                $dataToInsert[] = [
                    'dormitory_tenant_id' => $this_request->id,
                    'filename' => SaveFile::save($suppportingCoupleDocuments, "dormitory/supporting-document")
                ];
            }

            $this_request->coupleSupportingDocuments()->createMany($dataToInsert);
        }

        return ['message' => "Success!", 'status' => 200];
    }
}

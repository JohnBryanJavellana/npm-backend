<?php

namespace App\Services\Administrator\Dormitory;

use App\Enums\Administrator\DormitoryEnum;
use App\Models\{DormitoryTenant, DormitoryTenantSupDoc, DormitoryInvoice};
use App\Jobs\SaveAvatar;
use App\Utils\{GenerateTrace};
use Illuminate\Support\Str;

class DormitoryRoomReservationManager
{
    /**
     * Summary of handleReservation
     * @param mixed $payload
     * @param bool $isPost
     */
    public function handleReservation(object $payload, bool $isPost) {
        $res = $isPost ? new DormitoryTenant(['trace_number' => GenerateTrace::createTraceNumber(DormitoryTenant::class, '-DR-')])
                       : DormitoryTenant::lockForUpdate()->findOrFail($payload->documentId);

        $res->fill([
            'remarks' => $payload->remarks ?? null,
            'tenant_status' => $payload->status === DormitoryEnum::REJECTED->value
                ? DormitoryEnum::REJECTED
                : ($payload->status === DormitoryEnum::FOR_PAYMENT->value ? DormitoryEnum::FOR_PAYMENT : DormitoryEnum::APPROVED)
        ]);

        if ($payload->status !== DormitoryEnum::REJECTED->value) {
            $res->fill([
                'check_in_datetime' => $payload->check_in_datetime,
                'check_out_datetime' => $payload->check_out_datetime,
                'status_of_occupancy' => $payload->status_of_occupancy,
                'user_id' => $payload->user_id,
                'dormitory_room_id' => $payload->dormitory_room_id,
                'purpose' => $payload->purpose
            ]);
        }
        $res->save();

        if($isPost && $payload->status === DormitoryEnum::FOR_PAYMENT->value) {
            $res->update([
                'dormitory_invoice_id' => $this->createInvoice(DormitoryEnum::DORMITORY->value, $res->id, $payload->user_id, $payload->payment_remarks, (object)($payload->pricingBreakdown ?? []))
            ]);
        }

        if ($payload->status !== DormitoryEnum::REJECTED->value) {
            if(!empty($payload->supporting_documents)) {
                foreach ($payload->supporting_documents as $sd) {
                    $name = Str::uuid() . '-room-.png';

                    DormitoryTenantSupDoc::create(['dormitory_tenant_id' => $res->id, 'filename' => $name ]);
                    SaveAvatar::dispatch($sd, $name, "dormitory/supporting-document", false, true, '');
                }
            }
        }

        return $res;
    }

    /**
     * Summary of createInvoice
     * @param string $serviceType
     * @param int $dormitoryTenantId
     * @param int $userId
     * @param mixed $remarks
     * @param object $pb
     * @return int
     */
    public function createInvoice(string $serviceType, int $dormitoryTenantId, int $userId, ?string $remarks, object $pb): int
    {
        $preparedData = [
            'dormitory_tenant_id' => $dormitoryTenantId,
            'user_id' => $userId,
            'trace_number' => GenerateTrace::createTraceNumber(DormitoryInvoice::class, '-INV-'),
            'type' => $serviceType,
            'remarks' => $remarks,
            'invoice_amount' => $pb->grandTotal ?? 0
        ];

        if($serviceType === DormitoryEnum::DORMITORY->value) {
            $preparedData = [
                ...$preparedData,
                'paying_as_trainee_days' => $pb->traineeDays ?? 0,
                'paying_as_trainee_amount' => $pb->traineeTotal ?? 0,
                'paying_as_guest_days' => $pb->guestDays ?? 0,
                'paying_as_guest_amount' => $pb->guestTotal ?? 0,
                'invoice_amount' => $pb->grandTotal ?? 0
            ];
        }

        $inv = DormitoryInvoice::create($preparedData);
        return $inv->id;
    }

    /**
     * Summary of setAsReserved
     * @param int $roomReservationId
     * @return array{message: string, status: int}
     */
    public function setAsReserved(int $roomReservationId, string $status) {
        $thisReservation = DormitoryTenant::lockForUpdate()->findOrFail($roomReservationId);

        if(!\in_array($thisReservation->tenant_status, [DormitoryEnum::PAID->value, DormitoryEnum::APPROVED->value, DormitoryEnum::ACTIVE->value, DormitoryEnum::RESERVED->value, DormitoryEnum::OFFSET->value])) {
            return [ 'message' => "Room Request is already $thisReservation->tenant_status. Can't set to {$status}.", 'status' => 409 ];
        }

        $thisReservation->update([ 'tenant_status' => $status ]);
        return ['message' => "Room reservation set to {$status}.", 'status' => 200];
    }
}

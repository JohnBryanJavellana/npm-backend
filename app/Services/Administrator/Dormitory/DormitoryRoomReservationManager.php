<?php

namespace App\Services\Administrator\Dormitory;

use App\Enums\Administrator\DormitoryEnum;
use App\Models\{DormitoryTenant, DormitoryTenantSupDoc, DormitoryInvoice};
use App\Jobs\SaveAvatar;
use App\Utils\{GenerateTrace, TransactionUtil};
use Illuminate\Support\Str;

class DormitoryRoomReservationManager
{
    /**
     * Summary of handleReservation
     * @param mixed $payload
     * @param bool $isPost
     */
    public function handleReservation(object $payload, bool $isPost) {
        // For creation, generate a new trace number. For update,
        // lock the record for update and find by ID.
        $res = $isPost ? new DormitoryTenant(['trace_number' => GenerateTrace::createTraceNumber(DormitoryTenant::class, '-DR-')])
                       : DormitoryTenant::lockForUpdate()->findOrFail($payload->documentId);

        // Fill the common fields for both creation and update.
        // For update, the status is determined by the payload.
        // For creation, it defaults to APPROVED unless the status in the payload is REJECTED.
        $res->fill([
            'remarks' => $payload->remarks ?? null,
            'tenant_status' => $payload->status === DormitoryEnum::REJECTED->value
                ? DormitoryEnum::REJECTED
                : ($payload->status === DormitoryEnum::FOR_PAYMENT->value ? DormitoryEnum::FOR_PAYMENT : DormitoryEnum::APPROVED)
        ]);

        // Only fill the following fields if the status is not REJECTED.
        // This allows for reservation requests to be created with a REJECTED status without requiring the additional fields.
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

        // If the status is not REJECTED, handle the supporting documents and invoice generation.
        // This allows for reservation requests to be created with a REJECTED status without requiring the additional fields.
        if ($payload->status !== DormitoryEnum::REJECTED->value) {
            if(!empty($payload->supporting_documents)) {
                foreach ($payload->supporting_documents as $sd) {
                    $name = Str::uuid() . '-room-.png';

                    DormitoryTenantSupDoc::create(['dormitory_tenant_id' => $res->id, 'filename' => $name ]);
                    SaveAvatar::dispatch($sd, $name, "dormitory/supporting-document", false, true, '');
                }
            }

            // For simplicity, the invoice generation logic is included here.
            $pb = (object)($payload->pricing_breakdown ?? []);
            if ($payload->with_fee && \in_array($payload->status_of_occupancy, ['TRAINEE', 'PAYING GUEST/VISITOR']) && $payload->status === DormitoryEnum::FOR_PAYMENT->value) {
                DormitoryInvoice::create([
                    'dormitory_tenant_id' => $res->id,
                    'user_id' => $payload->user_id,
                    'trace_number' => GenerateTrace::createTraceNumber(DormitoryInvoice::class, '-INV-'),
                    'paying_as_trainee_days' => $pb->traineeDays ?? 0,
                    'invoice_amount' => $pb->grandTotal ?? 0,
                    'type' => DormitoryEnum::DORMITORY,
                    'remarks' => $payload->payment_remarks
                ]);
            }
        }

        return $res;
    }

    /**
     * Summary of setAsReserved
     * @param int $roomReservationId
     * @return array{message: string, status: int}
     */
    public function setAsReserved(int $roomReservationId) {
        $thisReservation = DormitoryTenant::lockForUpdate()->findOrFail($roomReservationId);

        if(!\in_array($thisReservation->tenant_status, ["PAID", "APPROVED"])) {
            return [ 'message' => "Room Request is already $thisReservation->tenant_status. Can't set to Reserved.", 'status' => 409 ];
        }

        $thisReservation->update([ 'tenant_status' => DormitoryEnum::RESERVED ]);
        return ['message' => "Room reservation set to reserved.", 'status' => 200];
    }
}

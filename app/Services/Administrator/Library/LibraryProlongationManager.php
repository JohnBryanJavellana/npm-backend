<?php

namespace App\Services\Administrator\Library;

use App\Enums\Administrator\LibraryEnum;
use App\Enums\AdministratorReturnResponse;
use App\Models\BookReservation;
use Carbon\Carbon;

class LibraryProlongationManager
{
    /**
     * Summary of updateProlongationRequest
     * @param int $prolongationRequestId
     * @param string $status
     * @param mixed $acceptedStatus
     * @param string $targetDateTime
     * @return array{message: string, status: int}
     */
    public function updateProlongationRequest(int $prolongationRequestId, string $status, ?string $acceptedStatus, string $targetDateTime) {
        $this_prolongation_request = BookReservation::lockForUpdate()
            ->findOrFail($prolongationRequestId);

        $isPastDue = now()->gt(Carbon::parse($this_prolongation_request->to_date));

        $tempStatus = match(true) {
            $isPastDue                                    => 'EXPIRED',
            $status === LibraryEnum::APPROVED->value      => $acceptedStatus,
            \in_array($status, ["REJECTED", "CANCELLED"]) => 'RECEIVED',
            default                                       => 'ERROR'
        };

        $newDate = \in_array($tempStatus, ["EXTENDED", "RENEWED"]) ? Carbon::parse($targetDateTime) : $this_prolongation_request->to_date;
        $this_prolongation_request->update([
            'status' => $tempStatus,
            'to_date' => $newDate
        ]);

        return [
            'message' => AdministratorReturnResponse::LIBRARYCTRL_UPDATED_LIBRARYBOOKREQ->value,
            'status' => 200
        ];
    }
}

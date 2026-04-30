<?php

namespace App\Services\Administrator\Library;

use App\Enums\Administrator\LibraryEnum;
use App\Enums\AdministratorReturnResponse;
use App\Models\BookExtensionRequest;
use App\Models\BookReservation;
use Carbon\Carbon;

class LibraryProlongationManager
{
    /**
     * Summary of saveExtensionRequest
     * @param object $payload
     * @param int $bookResId
     * @param int $requestor
     * @return array{message: string, status: int}
     */
    public function saveExtensionRequest(object $payload, int $bookResId, int $requestor): array
    {
        $this_extension = collect($payload->data)->each(function($q) {
            BookReservation::findOrFail($q['book_res_id'])->update(['status' => "EXTENDING"]);
        })->map(function($q) use ($bookResId) {
            $bookReservation = BookReservation::findOrFail($q['book_res_id']);

            return [
                'book_res_id' => $bookResId,
                'book_reservation_id' => $q['book_res_id'],
                'current_to_date' => $bookReservation['to_date'],
                'date_of_extension' => $q['to'],
                'created_at' => now(),
                'updated_at' => now()
            ];
        })->toArray();

        BookExtensionRequest::insert($this_extension);
        return ['message' => "Success!", 'status' => 200];
    }

    /**
     * Summary of updateProlongationRequest
     * @param int $prolongationRequestId
     * @param string $status
     * @param mixed $acceptedStatus
     * @param string $targetDateTime
     * @return array{message: string, status: int}
     */
    public function updateProlongationRequest(int $prolongationRequestId, string $status, ?string $acceptedStatus, string $targetDateTime): array
    {
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

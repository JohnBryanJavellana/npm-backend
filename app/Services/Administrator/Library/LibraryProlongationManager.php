<?php

namespace App\Services\Administrator\Library;

use App\Enums\Administrator\LibraryEnum;
use App\Enums\AdministratorReturnResponse;
use App\Models\BookExtensionRequest;
use App\Models\BookReservation;
use App\Models\User;
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
    public function saveExtensionRequest(object $payload, int $bookResId, int $requestor, string $type): array
    {
        $this_extension = collect($payload->data)->each(function($q) use ($type) {
            BookReservation::findOrFail($q['book_res_id'])->update(['status' => $type === "EXTENSION" ? "EXTENDING" : "RENEWING"]);
        })->map(function($q) use ($bookResId, $requestor, $type) {
            $bookReservation = BookReservation::findOrFail($q['book_res_id']);

            $targetTo = match($type) {
                "EXTENSION" => User::findOrFail($requestor)->role === "TRAINEE" ? Carbon::parse($bookReservation['to_date'])->addHours(3) : Carbon::parse($bookReservation['to_date'])->addDays(7),
                "RENEWAL" => User::findOrFail($requestor)->role === "TRAINEE" ? Carbon::parse($bookReservation['to_date'])->addDays(7) : Carbon::parse($bookReservation['to_date'])->addDays(15)
            };

            return [
                'book_res_id' => $bookResId,
                'book_reservation_id' => $q['book_res_id'],
                'current_to_date' => $bookReservation['to_date'],
                'date_of_extension' => $targetTo,
                'prev_status' => $bookReservation->status,
                'type' => $type,
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
     * @return array{message: string, status: int}
     */
    public function updateProlongationRequest(int $prolongationRequestId, string $status, string $type): array
    {
        $this_prolongation_request = BookExtensionRequest::lockForUpdate()->findOrFail($prolongationRequestId);
        $this_prolongation_request->update(['status' => $status]);

        $newBookReservationStatus = match($status) {
            "APPROVED" => $type === "EXTENSION" ? "EXTENDED" : "RENEWED",
            default => $this_prolongation_request->prev_status
        };

        $this_prolongation_request->bookReservation()->update([
            'to_date' => $status === "APPROVED" ? $this_prolongation_request->date_of_extension : $this_prolongation_request->current_to_date,
            'status' => $newBookReservationStatus
        ]);

        return [
            'message' => AdministratorReturnResponse::LIBRARYCTRL_UPDATED_LIBRARYBOOKREQ->value,
            'status' => 200
        ];
    }
}

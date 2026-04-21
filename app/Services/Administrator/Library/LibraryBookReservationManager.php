<?php

namespace App\Services\Administrator\Library;

use App\Enums\Administrator\LibraryEnum;
use App\Enums\AdministratorReturnResponse;
use App\Models\{BookCopy, BookReservation, BookRes};

class LibraryBookReservationManager
{
    /**
     * Summary of updateReservation
     * @param int $reservationId
     * @param string $status
     * @return array{message: string, status: int}
     */
    public function updateReservation(int $reservationId, string $status)
    {
        $reservation = BookReservation::lockForUpdate()->findOrFail($reservationId);
        $updateData = ['status' => $status];

        if ($reservation->type === LibraryEnum::HARD_COPY->value && !$reservation->book_copy_id && $status === LibraryEnum::APPROVED->value) {
            $updateData['book_copy_id'] = $this->assignAvailableCopy($reservation->book_id);
        }

        $reservation->update($updateData);

        if ($reservation->book_copy_id) {
            $this->syncCopyStatus($reservation->book_copy_id, $status);
        }

        $this->updateParentStatus($reservation->book_res_id);
        return [
            'message' => AdministratorReturnResponse::LIBRARYCTRL_UPDATED_LIBRARYBOOKREQ->value,
            'status' => 200
        ];
    }

    /**
     * Summary of assignAvailableCopy
     * @param int $bookId
     * @throws \Exception
     */
    protected function assignAvailableCopy(int $bookId)
    {
        $copy = BookCopy::where(['book_id' => $bookId, 'status' => LibraryEnum::AVAILABLE])
            ->lockForUpdate()
            ->first() ?? throw new \DomainException("No available copies for this book.", 409);

        $copy->update(['status' => LibraryEnum::BORROWED]);
        return $copy->id;
    }

    /**
     * Summary of syncCopyStatus
     * @param int $copyId
     * @param string $resStatus
     * @return void
     */
    protected function syncCopyStatus(int $copyId, string $resStatus)
    {
        $status = match(true) {
            \in_array($resStatus, ["RETURNED", "REJECTED", "CANCELLED"]) => "AVAILABLE",
            \in_array($resStatus, ["DAMAGED", "LOST"]) => $resStatus,
            $resStatus === "RECEIVED" => "BORROWED",
            default => "RESERVED"
        };

        BookCopy::whereKey($copyId)->update(['status' => $status]);
    }

    /**
     * Summary of updateParentStatus
     * @param int $bookResId
     * @return void
     */
    protected function updateParentStatus(int $bookResId)
    {
        $activeStatuses = ['PENDING', 'APPROVED', 'RECEIVED', 'EXTENDING', 'EXTENDED', 'RENEWING'];
        $hasActive = BookReservation::where('book_res_id', $bookResId)
            ->whereIn('status', $activeStatuses)
            ->exists();

        BookRes::whereKey($bookResId)->update(['status' => !$hasActive ? LibraryEnum::FOR_CSM : LibraryEnum::ACTIVE]);
    }
}

<?php

namespace App\Services\Trainee\Library;

use App\Enums\RequestStatus;
// use App\Models\BookReservation;
use App\Models\{BookService, BookRes, BookReservation};
use Carbon\Carbon;
use DomainException;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class LibraryRenewService
{
    public function __construct(
        protected LibraryExtraService $libraryExtraService,
        protected BookService $bookServiceModel,
        protected BookReservation $bookReservationModel,
        protected BookRes $bookResModel,
    ) {}

    public function prepareData($records, $book_reservation_ids)
    {
        if ($records->count() !== count($book_reservation_ids)) {
            throw new DomainException("Only 'RECEIVED', 'EXTENDED', 'RENEWED' books are allowed to be renewed.");
        }

        //validate DATE

    }




    public function storeRenewRequest($validated)
    {
        DB::transaction(function () use ($validated) {
            $userId = $validated['user_id'];
            $bookIds = collect($validated['data'])->pluck('book_res_id')->values()->toArray();

            $records = $this->bookReservationModel->query()
                ->forStatus(RequestStatus::renewableStatuses())
                ->whereRelation('bookRes', 'user_id', $userId)
                ->whereIn('id', $bookIds)
                ->lockForUpdate()
                ->get();

            $this->prepareData($records, $bookIds);

            $this->libraryExtraService->storeExtraService($validated, $userId, 'RENEW');

            foreach ($records as $record) {
                $record->status = RequestStatus::RENEWING->value;
                $record->save();
            }
        });
    }


    public function cancelRenewRequest($validated)
    {
        DB::transaction(function () use ($validated) {
            $record = $this->bookReservationModel->query()
                ->whereKey($validated["book_res_id"])
                ->where("book_res_id", $validated["request_id"])
                ->firstOrFail();

            //validate record
            $date = Carbon::parse($record->to_date);

            $record->update([
                "status" => $date?->isPast() ? RequestStatus::EXPIRED->value : RequestStatus::RECEIVED->value
            ]);

            $record->services()
                ->status(RequestStatus::PENDING->value)
                ->service("RENEW")
                ->update([
                    "status" => RequestStatus::CANCELLED->value
                ]);

            $record->bookRes()->update([
                "status" => RequestStatus::ACTIVE->value
            ]);
        });
    }
}

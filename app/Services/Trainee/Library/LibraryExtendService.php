<?php

namespace App\Services\Trainee\Library;

use App\Enums\RequestStatus;
use App\Models\BookExtensionRequest;
use App\Models\BookRes;
use App\Models\BookReservation;
use Carbon\Carbon;
use DomainException;
use Illuminate\Support\Facades\DB;

class LibraryExtendService
{
    public function __construct(
        protected BookReservation $bookReservationModel,
        protected LibraryExtraService $libraryExtraService,
        protected BookRes $bookResModel
    ) {}

    private function prepareData($records, $book_reservation_ids)
    {
        if ($records->count() !== count($book_reservation_ids)) {
            throw new DomainException("Only 'RECEIVED', 'EXTENDED', 'RENEWED' books are allowed to be extended.");
        }
    }

    public function storeExtendRequest($validated)
    {
        DB::transaction(function () use ($validated) {

            $book_ids = collect($validated["data"])->pluck("book_res_id");

            $records = $this->bookReservationModel->query()
                ->select("id", "status", "to_date")
                ->forStatus(RequestStatus::renewableStatuses())
                ->whereIn("id", $book_ids)
                ->lockForUpdate()
                ->get();

            foreach ($records as $record) {
                $status = $record->to_date && now()->greaterThan(Carbon::parse($record->to_date))
                    ? RequestStatus::EXPIRED
                    : RequestStatus::EXTENDING;

                $record->status = $status;
                $record->save();
            }

            $this->prepareData($records, $book_ids);

            $this->libraryExtraService->storeExtraService(
                $validated,
                $validated["user_id"],
                "EXTEND"
            );
        });
    }
    //!KAN SIR ALLEN ADI CODE gn comment kula kay d asya
    // public function cancelExtendRequest($validated)
    // {
    //     DB::transaction(function () use ($validated) {
    //         $record = $this->bookReservationModel->query()
    //             ->whereKey($validated["book_res_id"])
    //             ->where("book_res_id", $validated["request_id"])
    //             ->firstOrFail();

    //         //validate record
    //         $date = Carbon::parse($record->to_date);

    //         $record->update([
    //             "status" => $date?->isPast() ? RequestStatus::EXPIRED->value : RequestStatus::RECEIVED->value
    //         ]);

    //         $record->services()
    //             ->status(RequestStatus::PENDING->value)
    //             ->service("EXTEND")
    //             ->update([
    //                 "status" => RequestStatus::CANCELLED->value
    //             ]);
    //     });
    // }

    //!Working na adi na Code pagkuha nala bossing
    public function cancelExtendRequest($validated)
    {
        DB::transaction(function () use ($validated) {
            $record = $this->bookReservationModel->query()
                ->whereKey($validated["book_res_id"])
                ->where("book_res_id", $validated["request_id"])
                ->firstOrFail();
            $date = Carbon::parse($record->to_date);

            $reservationStatus = $date?->isPast() ? RequestStatus::EXPIRED->value : RequestStatus::RECEIVED->value;

            $record->update([
                'status' => $reservationStatus,
            ]);

            $record->bookRes()->update([
                'status' => RequestStatus::ACTIVE->value,
            ]);

            $record->services()
                ->status(RequestStatus::PENDING->value)
                ->service('EXTEND')
                ->update([
                    'status' => RequestStatus::CANCELLED->value,
                ]);
        });
    }
}

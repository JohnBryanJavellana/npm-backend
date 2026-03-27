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
            throw new DomainException("Only 'RECEIVED', 'EXTENDED', 'RENEWED' books are allowed to be renewed.");
        }

        // $now = Carbon::now();

        // if ($now->hour >= 13) {
        //     throw new DomainException("You can't extend book after 1pm");
        // }

        // foreach ($records as $record) {
        //     $fromDate = Carbon::parse($record->from_date);
        //     $toDate = Carbon::parse($record->to_date);

        //     $schedule = $record->schedules()
        //         ->whereDate('from_date', '<=', $fromDate)
        //         ->whereDate('to_date', '>=', $toDate)
        //         ->first();

        //     if (!$schedule) {
        //         throw new DomainException("No valid schedule found for reservation ID {$record->id}.");
        //     }
        // }
    }

    public function checkerActiveBooks($records, $book_reservation_ids)
    {
        $activeReservationIDs = $records->book_reservation_ids;

        $reservationIDsToCheck = array_intersect($activeReservationIDs, $book_reservation_ids);


        $activeBooks = \App\Models\BookReservation::whereIn('id', $reservationIDsToCheck)
            ->where('status', 'active')
            ->get()
            ->groupBy('book_res_id')
            ->map(function ($reservations) {
                return $reservations->count();
            });

        return $activeBooks;
    }

    public function storeExtendRequest($validated)
    {
        DB::transaction(function () use ($validated) {

            $book_ids = collect($validated["data"])->pluck("book_res_id");

            $records = $this->bookReservationModel->query()
                ->select("id", "status")
                ->forStatus(RequestStatus::renewableStatuses())
                ->whereRelation("bookRes", "user_id", "=", $validated["user_id"])
                ->whereIn("id", $book_ids)
                ->lockForUpdate()
                ->get();

            $this->bookResModel->query()
                ->where("id", $validated["reference_id"])
                ->update(["status" => RequestStatus::EXTENDING->value]);

            $this->prepareData($records, $book_ids);
            $this->checkerActiveBooks($records, $book_ids);

            $this->libraryExtraService->storeExtraService(
                $validated,
                $validated["user_id"],
                "EXTEND"
            );

            foreach ($records as $record) {
                $record->status = RequestStatus::EXTENDING->value;
                $record->save();
            }
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

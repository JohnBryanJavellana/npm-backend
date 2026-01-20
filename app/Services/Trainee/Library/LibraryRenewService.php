<?php

namespace App\Services\Trainee\Library;

use App\Enums\RequestStatus;
use App\Models\BookReservation;
use App\Models\BookService;
use DomainException;
use Illuminate\Support\Facades\DB;

class LibraryRenewService {
    public function __construct(
        protected BookService $bookServiceModel,
        protected BookReservation $bookReservationModel,
    )
    {}

    public function prepareData($record)
    {
        if(!$record) {
            throw new DomainException("No data found!");
        }

        if($record !== RequestStatus::RECEIVED->value) {
            throw new DomainException("Only received books are allowed to be renewed.");
        }

        if($record->bookRes?->status !== RequestStatus::ACTIVE->value) {
            throw new DomainException("Only active requests are allowed to be renewed.");
        }
    }

    // public function getRenewRequests()
    // {
    //     $records = $this->bookServiceModel->query()
    //     ->where()
    //     ;
    // }

    public function storeRenewRequest($validated)
    {
        DB::transaction(function() use($validated)  {

            $userId = auth()->id();

            $record = $this->bookReservationModel->query()
            ->with([
                "bookRes:id,user_id,status"
            ])
            ->whereRelation("bookRes", "user_id", "=", $userId)
            ->whereKey($validated["book_reservation_id"])
            ->lockForUpdate()
            ->first();

            $this->prepareData($record);

            $this->bookServiceModel->create([
                "book_reservation_id" => $validated["book_reservation_id"],
                "action" => "RENEW",
                "current_to_date" => $validated["current_to_date"],
                ]);

            $record->update([
                "status" => RequestStatus::RENEWING->value
            ]);
        });
    }

    public function cancelRenewRequest()
    {
        return;
    }
}   
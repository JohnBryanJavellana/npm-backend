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
            $book_reservation_ids = collect(value: $validated["data"])->pluck("book_res_id");

            $records = $this->bookReservationModel->query()
            ->with([
                "bookRes:id,user_id,status"
            ])
            ->whereRelation("bookRes", "user_id", "=", $userId)
            ->whereIn("id",$book_reservation_ids)
            ->lockForUpdate()
            ->get();

            // $this->prepareData($record);

            foreach ($validated["data"] as $data){
                $this->bookServiceModel->create([
                    "book_reservation_id" => $data["book_res_id"],
                    "user_id" => $userId,
                    "action" => "RENEW",
                    "old_to_date" => $data["to"],
                    ]);

            }

            foreach($records as $record) {
                $record->status = RequestStatus::RENEWING->value;
                $record->save();
            }
            // $records->update([
            //     "status" => RequestStatus::RENEWING->value
            // ]);
        });
    }

    public function cancelRenewRequest($validated)
    {
        DB::transaction(function () use ($validated) {
            $record = $this->bookReservationModel->query()
            ->with([
                "service"
            ])
            ->whereKey($validated["book_res_id"])
            ->lockForUpdate()
            ->first();

            $record->update([
                "status" => RequestStatus::RECEIVED->value
            ]);

            // $record->service?->update([
            //     "status" => RequestStatus::CANCELLED->value
            // ]);
        });
    }
}   
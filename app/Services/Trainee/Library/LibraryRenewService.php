<?php

namespace App\Services\Trainee\Library;

use App\Enums\RequestStatus;
use App\Models\BookReservation;
use App\Models\BookService;
use Carbon\Carbon;
use DomainException;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class LibraryRenewService {
    public function __construct(
        protected BookService $bookServiceModel,
        protected BookReservation $bookReservationModel,
    )
    {}

    public function prepareData($records, $book_reservation_ids)
    {

        if($records->count() !== count($book_reservation_ids)) {
            throw new DomainException("Only RECEIVED books are allowed to be renewed.");
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
            ->forStatus([RequestStatus::RECEIVED->value])
            ->whereRelation("bookRes", "user_id", "=", $userId)
            ->whereIn("id",$book_reservation_ids)
            ->lockForUpdate()
            ->get();

            //validate if all book reservations are active or "Received"
            //check length if an iya ginpasa na mga id is equal han kahilaba han return han model
            //kon diri throw error "Only received books are allowed to be renewed."

            //get all book_resvation based on the passed ids,
            //filter() statuses !== "Received", pluck name,

            // $this->prepareData($records, $book_reservation_ids);

            $Bulkdata = collect($validated["data"])->map(function ($data) use ($userId) {
                    return [
                        "book_reservation_id" => $data["book_res_id"],
                        "user_id" => $userId,
                        "action" => "RENEW",
                        "old_to_date" => $data["to"],
                        "created_at" => Carbon::now(),
                        "updated_at" => Carbon::now()
                    ];
            })->toArray();

            $this->bookServiceModel->insert($Bulkdata);

            foreach($records as $record) {
                $record->status = RequestStatus::RENEWING->value;
                $record->save();
            }
        });
    }

    public function cancelRenewRequest($validated)
    {
        DB::transaction(function() use ($validated) {
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

        });
    }
}

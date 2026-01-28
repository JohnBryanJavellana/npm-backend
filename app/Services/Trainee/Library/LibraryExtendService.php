<?php

namespace App\Services\Trainee\Library;

use App\Enums\RequestStatus;
use App\Models\BookExtensionRequest;
use App\Models\BookReservation;
use Carbon\Carbon;
use DomainException;
use Illuminate\Support\Facades\DB;

class LibraryExtendService {
    public function __construct(
        protected BookReservation $bookReservationModel,
        protected LibraryExtraService $libraryExtraService,
    ) {}

    private function prepareData($records, $book_reservation_ids){
                if($records->count() !== count($book_reservation_ids)) {
            throw new DomainException("Only 'RECEIVED', 'EXTENDED', 'RENEWED' books are allowed to be renewed.");
        }
    }
    
    public function createExtendRequest($validated)
    {
        DB::transaction(function()use ($validated) {

            $book_ids = collect($validated["data"])->pluck("book_res_id");
            
            $records = $this->bookReservationModel->query()
            ->select("id", "status")
            ->forStatus(RequestStatus::renewableStatuses())
            ->whereRelation("bookRes", "user_id", "=", $validated["user_id"])
            ->whereIn("id",$book_ids)
            ->lockForUpdate()
            ->get();

            $this->prepareData($records, $book_ids);

            $this->libraryExtraService->storeExtraService($validated, $validated["user_id"], "EXTEND");
            
            foreach($records as $record) {
                $record->status = RequestStatus::EXTENDING->value;
                $record->save();
            }
        });
    }

    public function cancelExtendRequest($validated)
    {
        DB::transaction(function()use ($validated) {
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
            ->service("EXTEND")
            ->update([
                "status" => RequestStatus::CANCELLED->value
            ]); 
        });
    }    
}
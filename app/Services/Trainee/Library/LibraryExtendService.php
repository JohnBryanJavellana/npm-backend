<?php

namespace App\Services\Trainee\Library;

use App\Enums\RequestStatus;
use App\Models\BookExtensionRequest;
use App\Models\BookReservation;
use Illuminate\Support\Facades\DB;

class LibraryExtendService {
    public function __construct(
        private BookExtensionRequest $bookExtensionRequest,
        protected BookReservation $bookReservationModel,
        protected LibraryExtraService $libraryExtraService,
    )
    {}


    private function prepareData(){
        return;
    }
    public function createExtendRequest($validated)
    {
        DB::transaction(function($validated) {
            // $this->prepareData();

            $book_ids = collect($validated["data"])->pluck("book_res_id");

            $records = $this->bookReservationModel->query()
            ->select("id", "status")
            ->forStatus([RequestStatus::RECEIVED->value])
            ->whereRelation("bookRes", "user_id", "=", $validated["user_id"])
            ->whereIn("id",$book_ids)
            ->lockForUpdate()
            ->get();

            $this->libraryExtraService->storeExtraService($validated, $validated["user_id"], "EXTEND");
            
            foreach($records as $record) {
                $record->status = RequestStatus::EXTENDING->value;
                $record->save();
            }
        });
    }


    
    
}
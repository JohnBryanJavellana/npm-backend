<?php

namespace App\Services\Trainee\Library;

use App\Models\BookService;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class LibraryExtraService {
    public function __construct(
        protected BookService $bookServiceModel
    )
    {}

    public function storeExtraService($validated, $userId, $action)
    {
        DB::transaction(function() use ($validated, $userId, $action) {
            $Bulkdata = collect($validated["data"])->map(function ($data) use ($userId, $action) {
                    return [
                        "book_reservation_id" => $data["book_res_id"],
                        "user_id" => $userId,
                        "action" => $action,
                        "old_to_date" => $data["to"],
                        "created_at" => Carbon::now(),
                        "updated_at" => Carbon::now()
                    ];
            })->toArray();

            $this->bookServiceModel->query()->insert($Bulkdata);
        });
    }

    public function updateExtraService()
    {
        return;
    }
}
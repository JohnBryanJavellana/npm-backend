<?php

namespace App\Services\Trainee\Library;

use App\Models\BookExtensionRequest;
use Illuminate\Support\Facades\DB;

class LibraryExtendService {
    public function __construct(
        private BookExtensionRequest $bookExtensionRequest,
    )
    {}

    public function createExtendRequest()
    {
        DB::transaction(function() {

        });
    }

    private function prepareData(){
        
    }
}
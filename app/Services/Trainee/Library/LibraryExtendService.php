<?php

namespace App\Services\Trainee\Library;

use App\Models\BookExtensionRequest;

class LibraryExtendService {
    public function __construct(
        private BookExtensionRequest $bookExtensionRequest,
    )
    {}
}
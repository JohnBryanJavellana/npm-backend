<?php

namespace App\Enums\Administrator;

enum LibraryEnum : string {
    case ACTIVE = "ACTIVE";
    case FOR_CSM = "FOR CSM";
    case EXTENDING = "EXTENDING";
    case COMPLETED = "COMPLETED";
}

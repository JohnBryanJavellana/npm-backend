<?php

namespace App\Enums\Administrator;

enum LibraryEnum : string {
    case PENDING = "PENDING";
    case ACTIVE = "ACTIVE";
    case FOR_CSM = "FOR CSM";
    case EXTENDING = "EXTENDING";
    case COMPLETED = "COMPLETED";
    case PAID = "PAID";
    case PROCESSING_PAYMENT = "PROCESSING PAYMENT";
    case FOR_PAYMENT = "FOR PAYMENT";
}

<?php

namespace App\Enums\Administrator;

enum LibraryEnum : string {
    case APPROVED = "APPROVED";
    case PENDING = "PENDING";
    case ACTIVE = "ACTIVE";
    case FOR_CSM = "FOR CSM";
    case HARD_COPY = "HARD-COPY";
    case EXTENDING = "EXTENDING";
    case COMPLETED = "COMPLETED";
    case AVAILABLE = "AVAILABLE";
    case BORROWED = "BORROWED";
    case UNAVAILABLE = "UNAVAILABLE";
    case PAID = "PAID";
    case REJECTED = "REJECTED";
    case DECLINED = "DECLINED";
    case PROCESSING_PAYMENT = "PROCESSING PAYMENT";
    case FOR_PAYMENT = "FOR PAYMENT";

    public static function INVALID_STATUS(): array
    {
        return [
            self::REJECTED->value,
            self::DECLINED->value
        ];
    }
}

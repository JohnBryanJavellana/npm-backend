<?php

namespace App\Enums\Administrator;

enum RAEnum : string
{
    case ACTIVE = "ACTIVE";
    case RECEIVED = "RECEIVED";
    case RETURNED = "RETURNED";
    case APPROVED = "APPROVED";
    case PENDING = "PENDING";
    case DECLINED = "DECLINED";
    case CANCELLED = "CANCELLED";
    case PAID = "PAID";
    case UNAVAILABLE = "UNAVAILABLE";
    case AVAILABLE = "AVAILABLE";
}

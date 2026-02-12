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
    case DAMAGED = "DAMAGED";
    case GOOD_CONDITION = "GOOD CONDITION";
    case CANCELLED = "CANCELLED";
    case OCCUPIED = "OCCUPIED";
    case FOR_CSM = "FOR CSM";
    case PAID = "PAID";
    case DONE = "DONE";
    case UNAVAILABLE = "UNAVAILABLE";
    case AVAILABLE = "AVAILABLE";
}

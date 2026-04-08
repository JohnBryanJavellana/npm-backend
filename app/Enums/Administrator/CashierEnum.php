<?php

namespace App\Enums\Administrator;

enum CashierEnum : string
{
    case PENDING = "PENDING";
    case DECLINED = "DECLINED";
    case CANCELLED = "CANCELLED";
    case FOR_VERIFICATION = "FOR-VERIFICATION";
    case PROCESSING_PAYMENT = "PROCESSING PAYMENT";
    case PAID = "PAID";
    case UNAVAILABLE = "UNAVAILABLE";
    case FOR_PAYMENT = "FOR-PAYMENT";
    case AVAILABLE = "AVAILABLE";
    case WALK_IN = "WALK-IN";
}

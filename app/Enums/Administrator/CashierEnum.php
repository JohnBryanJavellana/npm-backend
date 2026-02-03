<?php

namespace App\Enums\Administrator;

enum CashierEnum : string
{
    case PENDING = "PENDING";
    case DECLINED = "DECLINED";
    case CANCELLED = "CANCELLED";
    case PAID = "PAID";
    case UNAVAILABLE = "UNAVAILABLE";
    case FOR_PAYMENT = "FOR-PAYMENT";
    case AVAILABLE = "AVAILABLE";
    case UNVERIFIED_REQUIREMENT = "N";
    case BASIC_REQUIREMENT = 'YES';
}

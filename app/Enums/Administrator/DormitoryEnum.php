<?php

namespace App\Enums\Administrator;

enum DormitoryEnum : string
{
    case PENDING = "PENDING";
    case PAID = "PAID";
    case PROCESSING_PAYMENT = "PROCESSING PAYMENT";
    case APPROVED = "APPROVED";
    case RESERVED = "RESERVED";
    case ACTIVE = "ACTIVE";
    case FOR_PAYMENT = "FOR PAYMENT";
    case REJECTED = 'REJECTED';
    case TERMINATED = 'TERMINATED';
    case EXTENDING = 'EXTENDING';
    case CANCELLED = 'CANCELLED';
    case AVAILABLE = 'AVAILABLE';
    case RECEIVED = 'RECEIVED';
    case BORROWED = 'BORROWED';
    case COUPLE = 'COUPLE';
    case OFFICERS = 'OFFICERS';
    case RATINGS = 'RATINGS';
}

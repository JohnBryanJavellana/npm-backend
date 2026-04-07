<?php

namespace App\Enums\Administrator;

enum DormitoryEnum : string
{
    case DORMITORY = "DORMITORY";
    case APPROVED_WITH_FEE = "APPROVED_WITH_FEE";
    case SERVICE = "SERVICE";
    case PENDING = "PENDING";
    case DECLINED = "DECLINED";
    case DONE = "DONE";
    case PAID = "PAID";
    case PROCESSING_PAYMENT = "PROCESSING PAYMENT";
    case APPROVED = "APPROVED";
    case RESERVED = "RESERVED";
    case ACTIVE = "ACTIVE";
    case FOR_PAYMENT = "FOR PAYMENT";
    case REJECTED = 'REJECTED';
    case TRANSFERRING = 'TRANSFERRING';
    case TRANSFERRED = 'TRANSFERRED';
    case TERMINATED = 'TERMINATED';
    case EXTENDING = 'EXTENDING';
    case CANCELLED = 'CANCELLED';
    case AVAILABLE = 'AVAILABLE';
    case RECEIVED = 'RECEIVED';
    case BORROWED = 'BORROWED';
    case COUPLE = 'COUPLE';
    case OFFICERS = 'OFFICERS';
    case RATINGS = 'RATINGS';
    case RETURNED = 'RETURNED';
    case DAMAGED = 'DAMAGED';
    case LOST = 'LOST';
    case UNAVAILABLE = 'UNAVAILABLE';
}


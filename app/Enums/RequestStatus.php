<?php

namespace App\Enums;

enum RequestStatus: string {

    case ENROLLED = "ENROLLED";
    case DECLINED = "DECLINED";
    case IR = "IR";
    case CSFB = "CSFB";
    case PENDING = 'PENDING';
    case APPROVED = 'APPROVED';
    case CANCELLED = 'CANCELLED';
    case EXTENDING = 'EXTENDING';
    case TERMINATED = 'TERMINATED';
    case TRANSFERRED = 'TRANSFERRED';
    case FOR_PAYMENT = 'FOR PAYMENT';
    case REJECTED = 'REJECTED';
    case PAID = 'PAID';
    case PROCESSING_PAYMENT = 'PROCESSING PAYMENT';

    //DORM
    case AVAILABLE = 'AVAILABLE';
    case UNAVAILABLE = 'UNAVAILABLE';
    case OCCUPIED = 'OCCUPIED';
    case RESERVED = 'RESERVED';
    case FOR_VERIFICATION = "FOR-VERIFICATION";
    case TRANSFERRING = "TRANSFERRING";
    //PAYMENT TYPE
    case ONLINE = "ONLINE";
    case WALK_IN = "WALK-IN";
    //DORM INVOICE TYPE
    case INCLUSION = "INCLUSION";
    case SERVICE = "SERVICE";
    case DORMITORY = "DORMITORY";

    //LIBRARY
    case COMPLETED = 'COMPLETED';
    case ACTIVE = 'ACTIVE';
    case RECEIVED = 'RECEIVED';
    case INACTIVE = 'INACTIVE';
    case FOR_CSM = 'FOR CSM';
    case VERIFICATION = 'VERIFICATION';
    case RENEWING = 'RENEWING';
    case EXPIRED = "EXPIRED";
}

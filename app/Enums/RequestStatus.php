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
    case EXTENDED = 'EXTENDED';
    case EXPIRED = "EXPIRED";
    case RENEWED = 'RENEWED';
    case LOST = "LOST";
    case DAMAGED = "DAMAGED";

    //RECREATIONAL

    case DONE = "DONE";
    case RETURNED = "RETURNED";


    public static function renewableStatuses(): array {
        return [
            self::RECEIVED->value,
            self::EXTENDED->value,
            self::RENEWED->value
        ];
    }

    public static function notAllowedStatuses(): array
    {
        return [
            RequestStatus::COMPLETED->value,
            RequestStatus::CANCELLED->value,
            RequestStatus::DECLINED->value,
            RequestStatus::IR->value,
            RequestStatus::CSFB->value,
        ];
    }

    public static function CompletingRecRequest(): array
    {
        return [
            RequestStatus::DONE->value,
            RequestStatus::CANCELLED->value,
            RequestStatus::DECLINED->value,
            RequestStatus::RETURNED->value,
        ];
    }
}

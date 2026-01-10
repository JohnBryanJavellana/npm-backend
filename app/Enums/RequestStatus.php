<?php

namespace App\Enums;

enum RequestStatus: string {
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
    case FOR_VERIFICATION = "FOR VERIFICATION";

    //LIBRARY
    case COMPLETED = 'COMPLETED';
    case ACTIVE = 'ACTIVE';
    case RECEIVED = 'RECEIVED';
    case INACTIVE = 'INACTIVE';
    case FOR_CSM = 'FOR CSM';
    case VERIFICATION = 'VERIFICATION';
}
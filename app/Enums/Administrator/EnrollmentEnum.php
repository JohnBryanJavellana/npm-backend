<?php

namespace App\Enums\Administrator;

enum EnrollmentEnum : string
{
    case PENDING = "PENDING";
    case RESERVED = "RESERVED";
    case DECLINED = "DECLINED";
    case CANCELLED = "CANCELLED";
    case ENROLLED = "ENROLLED";
    case FOR_PAYMENT = "FOR-PAYMENT";
    case PROCESSING_PAYMENT = "PROCESSING PAYMENT";
    case COMPLETED = "COMPLETED";
    case PAID = "PAID";
    case INCOMPLETE_REQUIREMENTS = "IR";
    case COURSE_STATUS_FULLY_BOOKED = "CSFB";
    case VERIFIED_REQUIREMENT = "Y";
    case UNVERIFIED_REQUIREMENT = "N";
    case BASIC_REQUIREMENT = 'YES';
}

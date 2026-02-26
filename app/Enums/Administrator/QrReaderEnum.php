<?php

namespace App\Enums\Administrator;

enum QrReaderEnum : string
{
    case DORMITORY = "DORMITORY";
    case ENROLLMENT = "ENROLLMENT";
    case LIBRARY = "LIBRARY";
    case GUARD_ENTRANCE = "GUARD_ENTRANCE";
    case GUARD_EXIT = "GUARD_EXIT";
    case CHECK_IN = "CHECK_IN";
    case CHECK_OUT = "CHECK_OUT";
}

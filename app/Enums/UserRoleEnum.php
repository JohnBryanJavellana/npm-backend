<?php

namespace App\Enums;

enum UserRoleEnum: string 
{
    case SUPERADMIN = "SUPERADMIN";
    case TRAINEE = "TRAINEE";
    case ADMIN_ENROLLMENT = "ADMIN-ENROLLMENT";
    case ADMIN_LIBRARY = "ADMIN-LIBRARY";
    case ADMIN_DORMITORY = "ADMIN-DORMITORY";
    case TRAINER = "TRAINER";
    case CASHIER = "CASHIER";
}
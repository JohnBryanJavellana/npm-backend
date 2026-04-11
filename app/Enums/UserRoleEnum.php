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
    case ADMIN_RA = "ADMIN-RA";
    case CASHIER = "ADMIN-CASHIER";
    case LMS = "ADMIN-LMS";


    public static function enrollmentRoles(): array
    {
        return [
            self::ADMIN_ENROLLMENT->value,
            self::SUPERADMIN->value,
        ];
    }

    public static function recreationalRoles(): array
    {
        return [
            self::ADMIN_RA->value,
            self::SUPERADMIN->value,
        ];
    }

    public static function facilitatorRoles(): array
    {
        return [
            self::SUPERADMIN->value,
            self::ADMIN_ENROLLMENT->value,
            self::TRAINER->value,
            self::LMS->value,
        ];
    }
}

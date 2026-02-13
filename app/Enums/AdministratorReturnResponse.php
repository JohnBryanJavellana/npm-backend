<?php

namespace App\Enums;

enum AdministratorReturnResponse: string {
    case ACCOUNTCTRL_UPDATE_PERSONAL = "Account personal information is updated.";
    case ACCOUNTCTRL_UPDATE_PASSWORD = "Password changed successfully. You will reloggin again.";
    case CASHIERCTRL_PAY_WALKIN = "You've processed a walk-in payment.";
    case CASHIERCTRL_CREATED_CHARGECATEGORY = "You've created a fee category.";
    case CASHIERCTRL_UPDATED_CHARGECATEGORY = "You've updated a fee category.";
    case CASHIERCTRL_REMOVED_CHARGECATEGORY = "You've removed a fee category.";
    case CASHIERCTRL_UPDATED_PAYMENT = "You've updated a payment.";
    case CASHIERCTRL_CREATED_ORNUMBER = "OR Number successfully saved";
    case CASHIERCTRL_UPDATED_ORNUMBER = "OR Number successfully updated";
    case CASHIERCTRL_REMOVED_ORNUMBER = "You've removed an OR Number.";
    case CASHIERCTRL_CREATED_DORMITORY = "You've created a dormitory.";
    case CASHIERCTRL_UPDATED_DORMITORY = "You've updated a dormitory.";
}

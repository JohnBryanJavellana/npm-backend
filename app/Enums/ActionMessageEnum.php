<?php

namespace App\Enums;

enum ActionMessageEnum : string {
    case ENROLL_NEW_TRAINING_SUCCESSFULLY_SENT = "Enrollment request sent successfully";
    case CANCELLED_ENROLLED_REQUEST_SUCCESSFULL = "You've successfully cancelled training request";
    case DORMITORY_REQUEST_IS_EXISTING = "Request is already existing";
    case DORMITORY_CANCELLED = "Dormitory request cancelled successfully";
    case DORMITORY_REQUEST_SUCCESSFULLY_SENT = "Dormitary request sent successfully";
    case LIBRARY_BOOK_REQUEST_CANCEL = "You're request has been cancelled successfully";
    case LIBRARY_FOR_CSM_NEEED_FILL_OUT = "You still have a request with a “FOR CSM” status. Please fill it out before submitting a new request";
    case PROFILE_INFORMATION_UPDATE = "You have posted your new information!";
    case BOOK_RENEWAL_REQUEST_SUCCESSFULLY_SENT = "You've successfully sent a book renewal request";
    case BOOK_EXTENTION_REQUEST_SUCCESSFULLY_SENT = "Extension request has sent successfully!";
    case BOOK_SENT_SUCCESSFULLY = "Your book request was sent successfully!";

    case CANCELLED_RECREATIONAL_REQUEST = "User cancelled a recreational request.";
    case CANCELLED_UNIT_REQUEST = "User cancelled a unit request";
    case SENT_ENROLLMENT_REQUEST = "User sent enrolment request";
    case CANCELLED_TRAINING_REQUEST = "User has cancelled training request";
    case USER_PROCEED_TRAINING_FOR_VERIFICATION = "User has proceed training/s for verification.";

}
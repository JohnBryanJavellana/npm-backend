<?php

namespace App\Enums;

enum AdministratorAuditActions: string {
    /**
     * Summary of ACCOUNTCTRL
     */
    case ACCOUNTCTRL_UPDATE_PERSONAL = "Updated personal account information.";
    case ACCOUNTCTRL_UPDATE_PASSWORD = "Updated account password.";

    /**
     * Summary of CASHIERCTRL
     */
    case CASHIERCTRL_PROCESSED_WALKIN = "Processed a walk-in payment.";
    case CASHIERCTRL_CREATED_CATEGORY = "Created a fee category.";
    case CASHIERCTRL_UPDATED_CATEGORY = "Updated a fee category.";
    case CASHIERCTRL_REMOVED_CATEGORY = "Removed a fee category.";
    case CASHIERCTRL_CREATED_OR = "Created an OR Number.";
    case CASHIERCTRL_UPDATED_OR = "Updated an OR Number.";
    case CASHIERCTRL_REMOVED_OR = "Removed an OR Number.";
    case CASHIERCTRL_UPDATED_PAYMENT = "Updated a payment.";

    /**
     * Summary of DORMITORYCTRL
     */
    case DORMITORYCTRL_CREATED_DORMITORY = "Created a dormitory.";
    case DORMITORYCTRL_UPDATED_DORMITORY = "Updated a dormitory.";
    case DORMITORYCTRL_REMOVED_DORMITORY = "Removed a dormitory room.";
    case DORMITORYCTRL_CREATED_DORMITORYINV = "Created a dormitory inventory.";
    case DORMITORYCTRL_UPDATED_DORMITORYINV = "Updated a dormitory inventory.";
    case DORMITORYCTRL_REMOVED_DORMITORYINVSTOCK = "Removed a dormitory inventory item stock.";
    case DORMITORYCTRL_REMOVED_DORMITORYINV = "Removed a dormitory inventory item.";
    case DORMITORYCTRL_CREATED_DORMITORYREQ = "Created a dormitory request.";
    case DORMITORYCTRL_UPDATED_DORMITORYREQ = "Updated a dormitory request.";
    case DORMITORYCTRL_CANCELLED_DORMITORYREQ = "Cancelled a dormitory request.";
    case DORMITORYCTRL_CREATED_DORMITORYSERV = "Created a dormitory service.";
    case DORMITORYCTRL_UPDATED_DORMITORYSERV = "Updated a dormitory service.";
    case DORMITORYCTRL_REMOVED_DORMITORYSERV = "Removed a dormitory service.";
    case DORMITORYCTRL_UPDATED_DORMITORYSTCKSTATUS = "Updated provided item stock status.";
    case DORMITORYCTRL_UPDATED_DORMITORYSTCKLIST = "Updated provided item stock list.";
    case DORMITORYCTRL_CREATED_DORMITORYSERVICEREQ = "Created a dormitory service request.";
    case DORMITORYCTRL_UPDATED_DORMITORYREQSERV = "Updated requested service.";
    case DORMITORYCTRL_CREATED_DORMITORYCHARGE = "Created a dormitory charge.";
    case DORMITORYCTRL_UPDATED_DORMITORYCHARGE = "Updated a dormitory charge.";
    case DORMITORYCTRL_CANCELLED_DORMITORYCHARGE = "Cancelled a dormitory charge.";

    /**
     * Summary of ENROLLMENTCTRL
     */
    case ENROLLMENTCTRL_CREATED_ENROLLMENTREQUIREREMARKS = "Created a remark.";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTREQUIREREMARKS = "Updated a remark.";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTAPPSTAT = "Updated enrollment application status.";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTEXPIREDSTATUS = "User has updated an enrolled course expiry status .";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTSCHED = "Created a schedule.";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTSCHED = "Updated a schedule.";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTSCHED = "Removed a schedule.";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTMOD = "Created a module.";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTMOD = "Updated a module.";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTMOD = "Removed a module.";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTMODTYPE = "Created a module type.";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTMODTYPE = "Updated a module type.";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTMODTYPE = "Removed a module type.";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTCERT = "Created a certificate.";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTCERT = "Updated a certificate.";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTCERT = "Removed a certificate.";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTREQUIREMENT = "Created a requirements.";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTREQUIREMENT = "Updated a requirements.";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTREQUIREMENT = "Removed a requirements.";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTSCHL = "Created a school.";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTSCHL = "Updated a school.";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTSCHL = "Removed a school.";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTCOURSE = "Created a course.";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTCOURSE = "Updated a course.";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTCOURSE = "Removed a course.";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTVOUCHER = "Created a voucher.";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTVOUCHER = "Updated a voucher.";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTVOUCHER = "Removed a voucher.";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTSPNSR = "Created a sponsor.";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTSPNSR = "Updated a sponsor.";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTSPNSR = "Removed a sponsor.";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTLICENSE = "Create a license.";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTLICENSE = "Updated a license.";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTLICENSE = "Removed a license.";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTRANK = "Created a rank.";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTRANK = "Updated a rank.";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTRANK = "Removed a rank.";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTFACILITATOR = "Created a facilitator.";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTFACILITATOR = "Updated a facilitator.";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTFACILITATOR = "Removed a facilitator.";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTTRAININGFEE = "Created a training fee.";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTTRAININGFEE = "Updated a training fee.";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTTRAININGFEE = "Removed a training fee.";

    /**
     * Summary of LIBRARYCTRL
     */
    case LIBRARYCTRL_CREATED_LIBRARYBOOK = "Created a book.";
    case LIBRARYCTRL_UPDATED_LIBRARYBOOK = "Updated a book.";
    case LIBRARYCTRL_REMOVED_LIBRARYBOOK = "Removed a book.";
    case LIBRARYCTRL_CREATED_LIBRARYBOOKENTRY = "Created a book entry.";
    case LIBRARYCTRL_UPDATED_LIBRARYBOOKENTRY = "Updated a book entry.";
    case LIBRARYCTRL_REMOVED_LIBRARYBOOKENTRY = "Removed a book entry.";
    case LIBRARYCTRL_REMOVED_LIBRARYBOOKCOPY = "Removed a book copy.";
    case LIBRARYCTRL_UPDATED_LIBRARYBOOKRESERVREQ = "Updated a book request.";
    case LIBRARYCTRL_UPDATED_LIBRARYBOOKRESERVSTATUS = "Updated book reservation status.";
    case LIBRARYCTRL_REMOVED_LIBRARYREQFINE = "Removed a request fine.";
    case LIBRARYCTRL_CREATED_LIBRARYREQFINE = "Created a request fine.";
    case LIBRARYCTRL_UPDATED_LIBRARYREQFINE = "Updated a request fine.";

    /**
     * Summary of MASTERLISTCTRL
     */
    case MASTERLISTCTRL_CREATED_MASTERLISTQRASSIGNMENT = "Created a QR Reader assignment.";
    case MASTERLISTCTRL_UPDATED_MASTERLISTQRASSIGNMENT = "Updated a QR Reader assignment.";
    case MASTERLISTCTRL_REMOVED_MASTERLISTUSER = "Removed a user.";
    case MASTERLISTCTRL_CREATED_MASTERLISTEMPLOYER = "Created an employer.";
    case MASTERLISTCTRL_UPDATED_MASTERLISTEMPLOYER = "Updated an employer.";
    case MASTERLISTCTRL_REMOVED_MASTERLISTEMPLOYER = "Removed an employer.";
    case MASTERLISTCTRL_CREATED_MASTERLISTPOSITION = "Created a position.";
    case MASTERLISTCTRL_UPDATED_MASTERLISTPOSITION = "Updated a position.";
    case MASTERLISTCTRL_REMOVED_MASTERLISTPOSITION = "Remove a position.";
    case MASTERLISTCTRL_CREATED_MASTERLISTQRLOC = "Created a QR Reader location.";
    case MASTERLISTCTRL_UPDATED_MASTERLISTQRLOC = "Updated a QR Reader location.";
    case MASTERLISTCTRL_REMOVED_MASTERLISTQRREADERASSIGNMENT = "Removed a position.";
    case MASTERLISTCTRL_REMOVED_MASTERLISTQRREADER = "Removed a qr reader.";

    /**
     * Summary of RECREATIONALACTIVITYCTRL
     */
    case RECREATIONALACTIVITYCTRL_CREATED_RECREATIONALACTIVITYFACILITY = "Created an facility.";
    case RECREATIONALACTIVITYCTRL_UPDATED_RECREATIONALACTIVITYFACILITY = "Updated an facility.";
    case RECREATIONALACTIVITYCTRL_REMOVED_RECREATIONALACTIVITYFACILITY = "Removed an facility.";
    case RECREATIONALACTIVITYCTRL_REMOVED_RECREATIONALACTIVITYEQUPSTCK = "Removed an equipment stock.";
    case RECREATIONALACTIVITYCTRL_CREATED_RECREATIONALACTIVITYEQUIP = "Created an equipment.";
    case RECREATIONALACTIVITYCTRL_REMOVED_RECREATIONALACTIVITYEQUIP = "Removed an equipment.";

      /**
     * Summary of CSMSCTRL
     */
    case CSMSCTRL_REMOVED_CSMSREQUEST = "User has successfully submitted a service survey.";

    /**
     * Summary MYACCOUNTCTRL
     */
    case MYACCOUNTCTRL_UPDATED_MYACCOUNTADMINPROFPIC = "An Admin has updated user's profile picture.";
    case MYACCOUNTCTRL_UPDATED_MYACCOUNTUSERPROFPIC = "User profile picture has been updated.";
    case MYACCOUNTCTRL_UPDATED_MYACCOUNTADDINFO = "You have posted your new information!";
    case MYACCOUNTCTRL_SEND_MYACCOUNTREQBOOK = "User sent a book request.";
    case MYACCOUNTCTRL_CANCELLED_MYACCOUNTREQBOOK = "User cancelled a book request.";
    case MYACCOUNTCTRL_CREATE_MYACCOUNTEXTENDREQ = "User sent a book extension request.";
    case MYACCOUNTCTRL_CANCELLED_MYACCOUNTEXTENDREQ = "User cancel a book extension request.";
    case MYACCOUNTCTRL_CREATED_MYACCOUNTRENEWREQ = "User created a book renewal request.";

}

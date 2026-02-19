<?php

namespace App\Enums;

enum AdministratorReturnResponse: string {
    /**
     * Summary of ACCOUNTCTRL
     */
    case ACCOUNTCTRL_UPDATE_PERSONAL = "Account personal information is updated.";
    case ACCOUNTCTRL_UPDATE_PASSWORD = "Password changed successfully. You will reloggin again.";

    /**
     * Summary of CASHIERCTRL
     */
    case CASHIERCTRL_PAY_WALKIN = "You've processed a walk-in payment.";
    case CASHIERCTRL_CREATED_CHARGECATEGORY = "You've created a fee category.";
    case CASHIERCTRL_UPDATED_CHARGECATEGORY = "You've updated a fee category.";
    case CASHIERCTRL_REMOVED_CHARGECATEGORY = "You've removed a fee category.";
    case CASHIERCTRL_ERR_CHARGECATEGORY = "Can't remove fee category. It already has connected data.";
    case CASHIERCTRL_UPDATED_PAYMENT = "You've updated a payment.";
    case CASHIERCTRL_ERR_PAYMENT = "Can't update payment.";
    case CASHIERCTRL_CREATED_ORNUMBER = "OR Number successfully saved";
    case CASHIERCTRL_UPDATED_ORNUMBER = "OR Number successfully updated";
    case CASHIERCTRL_REMOVED_ORNUMBER = "You've removed an OR Number.";
    case CASHIERCTRL_ERR_ORNUMBER = "Can't remove OR Number. It already has connected data.";

    /**
     * Summary of DORMITORYCTRL
     */
    case DORMITORYCTRL_CREATED_DORMITORY = "You've created a dormitory.";
    case DORMITORYCTRL_UPDATED_DORMITORY = "You've updated a dormitory.";
    case DORMITORYCTRL_UPDATED_DORMITORYROOM = "You've updated dormitory room.";
    case DORMITORYCTRL_REMOVED_DORMITORYROOM = "You've removed dormitory room.";
    case DORMITORYCTRL_ERR_DORMITORYROOM = "Can't remove room. It already has connected data.";
    case DORMITORYCTRL_CREATED_DORMITORYINVSTOCK = "You've added a dormitory inventory stock.";
    case DORMITORYCTRL_CREATED_DORMITORYINV = "You've created a dormitory inventory.";
    case DORMITORYCTRL_UPDATED_DORMITORYINV = "You've updated a dormitory inventory.";
    case DORMITORYCTRL_UPDATED_DORMITORYINVSTOCK = "You've updated a dormitory inventory stock.";
    case DORMITORYCTRL_REMOVED_DORMITORYINVSTOCK = "You've removed a dormitory inventory stock.";
    case DORMITORYCTRL_ERR_DORMITORYINVSTOCK = "Can't remove item. It already has connected data.";
    case DORMITORYCTRL_REMOVED_DORMITORYINV = "You've removed a dormitory inventory item.";
    case DORMITORYCTRL_ERR_DORMITORYINV = "Can't remove dorm inventory. It already has connected data.";
    case DORMITORYCTRL_CREATED_DORMITORYSERVICES = "You've created a dormitory service.";
    case DORMITORYCTRL_UPDATED_DORMITORYSERVICES = "You've updated  a dormitory service.";
    case DORMITORYCTRL_REMOVED_DORMITORYSERVICES = "You've removed  a dormitory service.";
    case DORMITORYCTRL_ERR_DORMITORYSERVICES = "Can't remove service. It already has connected data.";
    case DORMITORYCTRL_UPDATED_DORMITORYSTCKSTATUS = "You've updated provided item stock status.";
    case DORMITORYCTRL_UPDATED_DORMITORYSTCKLIST = "You've updated provided item stock list.";
    case DORMITORYCTRL_UPDATED_DORMITORYREQSERVICE = "You've updated requested service.";
    case DORMITORYCTRL_CANCELLED_DORMITORYCHARGE = "You've cancelled dormitory charge.";
    case DORMITORYCTRL_ERR_DORMITORYCHARGE = "Can't cancel charge.";
    case DORMITORYCTRL_UPDATED_DORMITORYSTATUS = "You've updated dormitory request .";
    /**
     * Summary of ENROLLMENTCTRL
     */
    case ENROLLMENTCTRL_CREATED_ENROLLMENTREMARK = "You've created a remark .";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTREMARK = "You've updated a remark .";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTTRAININGSTATUS = "You've Updated enrollment application status .";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTEXPIREDSTATUS = "You've updated an enrolled course expiry status .";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTSCHED = "You've created a schedule .";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTSCHED = "You've updated a schedule .";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTSCHED = "You've removed a schedule .";
    case ENROLLMENTCTRL_ERR_ENROLLMENTSCHED = "Can't remove schedule. It already has connected data .";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTMODULE = "You've created a module .";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTMODULE = "You've updated a module .";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTMODULE = "You've removed a module .";
    case ENROLLMENTCTRL_ERR_ENROLLMENTMODULE = "Can't remove module. It already has connected data .";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTMODULETYPE = "You've created a module type .";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTMODULETYPE = "You've updated a module type .";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTMODULETYPE = "You've removed module type .";
    case ENROLLMENTCTRL_ERR_ENROLLMENTMODULETYPE = "Can't remove module type. It already has connected data .";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTCERT = "You've created a certificate .";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTCERT = "You've updated a certificate .";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTCERT = "You've removed a certificate .";
    case ENROLLMENTCTRL_ERR_ENROLLMENTCERT = "Can't remove certificate. It already has connected data. .";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTREQUIREMENT = "You've created a requirement .";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTREQUIREMENT = "You've updated a requirement .";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTREQUIREMENT = "You've removed requirement .";
    case ENROLLMENTCTRL_ERR_ENROLLMENTREQUIREMENT = "Can't remove requirement. It already has connected data.";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTSCHL = "You've created a school .";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTSCHL = "You've updated a school.";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTSCHL = "You've removed a school.";
    case ENROLLMENTCTRL_ERR_ENROLLMENTSCHL = "Can't remove school. It already has connected data..";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTCOURSE = "You've created a school.";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTCOURSE = "You've updated a course.";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTCOURSE = "You've removed course.";
    case ENROLLMENTCTRL_ERR_ENROLLMENTCOURSE = "Can't remove course. It already has connected data.";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTVOUCHER = "You've created a voucher.";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTVOUCHER = "You've updated a voucher.";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTVOUCHER = "You've removed a voucher.";
    case ENROLLMENTCTRL_ERR_ENROLLMENTVOUCHER = "Can't remove voucher. It already has connected data.";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTSPONSOR = "You've created a sponsor.";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTSPONSOR = "You've updated a sponsor.";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTSPONSOR = "You've removed a sponsor.";
    case ENROLLMENTCTRL_ERR_ENROLLMENTSPONSOR = "Can't remove sponsor. It already has connected data..";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTLICENSE = "You've created a license.";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTLICENSE = "You've updated a license.";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTLICENSE = "You've removed a license.";
    case ENROLLMENTCTRL_ERR_ENROLLMENTLICENSE = "Can't remove license. It already has connected data.";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTRANK = "You've created a rank.";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTRANK = "You've updated a rank.";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTRANK = "You've removed a rank.";
    case ENROLLMENTCTRL_ERR_ENROLLMENTRANK = "Can't remove rank. It already has connected data.";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTFACILITATOR = "You've created a facilitator.";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTFACILITATOR = "You've updated a facilitator.";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTFACILITATOR = "You've removed a facilitator.";
    case ENROLLMENTCTRL_ERR_ENROLLMENTFACILITATOR = "Can't remove facilitator. It already has connected data.";
    case ENROLLMENTCTRL_CREATED_ENROLLMENTTRAININGFEE = "You've created a training fee.";
    case ENROLLMENTCTRL_UPDATED_ENROLLMENTTRAININGFEE = "You've updated a training fee.";
    case ENROLLMENTCTRL_REMOVED_ENROLLMENTTRAININGFEE = "You've removed a training fee.";
    case ENROLLMENTCTRL_ERR_ENROLLMENTTRAININGFEE = "Can't remove training fee. It already has connected data.";
     /**
     * Summary of LIBRARYCTRL
     */
    case LIBRARYCTRL_CREATED_LIBRARYBOOK = "You've created a book.";
    case LIBRARYCTRL_UPDATED_LIBRARYBOOK = "You've updated a book.";
    case LIBRARYCTRL_REMOVED_LIBRARYBOOK = "You've removed a book.";
    case LIBRARYCTRL_ERR_LIBRARYBOOK = "Can't remove book. It already has connected data.";
    case LIBRARYCTRL_CREATED_LIBRARYBOOKENTRY = "You've created a book entry.";
    case LIBRARYCTRL_UPDATED_LIBRARYBOOKENTRY = "You've updated a book entry.";
    case LIBRARYCTRL_REMOVED_LIBRARYBOOKENTRY = "You've removed a book entry.";
    case LIBRARYCTRL_ERR_LIBRARYBOOKENTRY = "Can't remove book entry. It already has connected data.";
    case LIBRARYCTRL_REMOVED_LIBRARYBOOKCOPY = "You've removed a book copy.";
    case LIBRARYCTRL_ERR_LIBRARYBOOKCOPY = "Can't remove book copy. It already has connected data.";
    case LIBRARYCTRL_UPDATED_LIBRARYBOOKREQ = "You've successfully updated a book reservation request.";
    case LIBRARYCTRL_UPDATED_LIBRARYBOOKRESERVATION = "You've updated a book  request.";
    case LIBRARYCTRL_REMOVED_LIBRARYFINE = "You've deleted a book reservation fine.";
    case LIBRARYCTRL_ERR_LIBRARYFINE = "Can't delete book reservation fine.";
    case LIBRARYCTRL_CREATED_LIBRARYREQUESTFINE = "You've created a request fine.";
    case LIBRARYCTRL_UPDATED_LIBRARYREQUESTFINE = "You've updated a request fine.";
       /**
     * Summary of MASTERLISTCTRL
     */
    case MASTERLISTCTRL_CREATED_MASTERLISTQRASSIGNMENT = "You've created a  QR Reader assignment.";
    case MASTERLISTCTRL_UPDATED_MASTERLISTQRASSIGNMENT = "You've updated a  QR Reader assignment.";
    case MASTERLISTCTRL_REMOVED_MASTERLISTUSER = "You've removed a user.";
    case MASTERLISTCTRL_ERR_MASTERLISTUSER = "Can't remove user. It already has connected datar.";
    case MASTERLISTCTRL_CREATED_MASTERLISTEMPLOYER = "You've created an employer.";
    case MASTERLISTCTRL_UPDATED_MASTERLISTEMPLOYER = "You've updated an employer.";
    case MASTERLISTCTRL_REMOVED_MASTERLISTEMPLOYER = "You've removed an employer.";
    case MASTERLISTCTRL_ERR_MASTERLISTEMPLOYER = "Can't remove employer. It already has connected data.";
    case MASTERLISTCTRL_CREATED_MASTERLISTPOSITION = "You've created a position.";
    case MASTERLISTCTRL_UPDATED_MASTERLISTPOSITION = "You've updated a position.";
    case MASTERLISTCTRL_REMOVED_MASTERLISTPOSITION = "You've removed a position.";
    case MASTERLISTCTRL_ERR_MASTERLISTPOSITION = "Can't remove position. It already has connected data.";
    case MASTERLISTCTRL_CREATED_MASTERLISTQRREADER = "You've created a QR Reader location.";
    case MASTERLISTCTRL_UPDATED_MASTERLISTQRREADER = "You've updated a QR Reader location.";
    case MASTERLISTCTRL_REMOVED_MASTERLISTQRREADERASSIGNMENT = "You've removed a qr reader assignment.";
    case MASTERLISTCTRL_REMOVED_MASTERLISTQRREADER = "You've removed a qr reader.";
    case MASTERLISTCTRL_ERR_REMOVED_MASTERLISTQRREADER = "Can't remove qr reader. It already has connected data.";

    /**
     * Summary of QRREADERCHECKINOUTCTRL
     */
    case QRREADERCHECKINOUTCTRL_SEND_QRREADERCHECKINOUT = "Enrollment request sent successfully";


     /**
    * Summary of RECREATIONALACTIVITYCTRL
    */

    case RECREATIONALACTIVITYCTRL_UPDATED_RECREATIONALACTIVITYREQFACILITY = "Facility updated successfully!";
    case RECREATIONALACTIVITYCTRL_ERR_RECREATIONALACTIVITYREQFACILITY = "Sorry your status is already";
    case RECREATIONALACTIVITYCTRL_CONFLICT_ERR_RECREATIONALACTIVITYREQFACILITY = "Scheduling conflict detected. This facility is already booked for the selected time range.";
    case RECREATIONALACTIVITYCTRL_UPDATED_RECREATIONALACTIVITYREQEQUIPMENT = "All items updated successfully!";
    case RECREATIONALACTIVITYCTRL_ERR_RECREATIONALACTIVITYREQEQUIPMENT = "Update partially completed. successCount successful, failCount failed. Summary:";
    case RECREATIONALACTIVITYCTRL_CREATED_RECREATIONALACTIVITYFACILITY = "You've created facility successfully!";
    case RECREATIONALACTIVITYCTRL_UPDATED_RECREATIONALACTIVITYFACILITY = "You've updated facility successfully!";
    case RECREATIONALACTIVITYCTRL_REMOVED_RECREATIONALACTIVITYFACILITY = "You've removed facility successfully!";
    case RECREATIONALACTIVITYCTRL_ERR_RECREATIONALACTIVITYFACILITY = "Can't remove facility. It already has connected data.";
    case RECREATIONALACTIVITYCTRL_REMOVED_RECREATIONALACTIVITYEQUIPSTCK = "You've removed equipment stock successfully!";
    case RECREATIONALACTIVITYCTRL_ERR_RECREATIONALACTIVITYEQUIPSTCK = "Can't remove equipment stock. It already has connected data.";
    case RECREATIONALACTIVITYCTRL_ERR_UPDATED_RECREATIONALACTIVITYEQUIPSTCK = "Equipment stock not found. Please try again.";
    case RECREATIONALACTIVITYCTRL_UPDATED_RECREATIONALACTIVITYEQUIPSTCK = "You've updated an equipment stock successfully!";
    case RECREATIONALACTIVITYCTRL_CREATED_RECREATIONALACTIVITYEQUIPMENT = "You've created an equipment successfully!";
    case RECREATIONALACTIVITYCTRL_UPDATED_RECREATIONALACTIVITYEQUIPMENT = "You've updated an equipment successfully!";
    case RECREATIONALACTIVITYCTRL_CREATED_RECREATIONALACTIVITYEQUIPMENTSTCK = "You've added an equipment stock!";
    case RECREATIONALACTIVITYCTRL_REMOVED_RECREATIONALACTIVITYEQUIPMENT = "You've removed an equipment successfully!";
    case RECREATIONALACTIVITYCTRL_ERR_RECREATIONALACTIVITYEQUIPMENT = "Can't remove equipment. It already has connected data.";

    /**
     * Summary of TRAINEEDORMITORYCTRL
     */
    case TRAINEEDORMITORYCTRL_CREATED_TRAINEEDORMITOREXTENDREQUEST = "Your extension request has been successfully submitted for review.";
    case TRAINEEDORMITORYCTRL_CANCEL_TRAINEEDORMITORYEXTENDREQUEST = "Your extend request has been successfully cancelled.";
    case TRAINEEDORMITORYCTRL_CREATED_TRAINEEDORMITORYTRANSFERREQUEST = "Transfer request sent! We're processing your request and will update you soon.";
    case TRAINEEDORMITORYCTRL_CANCEL_TRAINEEDORMITORYTRANSFERREQUEST = "Your transfer request has been successfully cancelled.";
    case TRAINEEDORMITORYCTRL_CREATE_TRAINEEDORMITORYREQUESTTENANTROOM = "Dormitory request sent successfully.";
    case TRAINEEDORMITORYCTRL_CANCEL_TRAINEEDORMITORYAPPLIEDDORM = "Dormitory request cancelled successfully.";
    case TRAINEEDORMITORYCTRL_CREATE_TRAINEEDORMITORYINCLUSIONREQ = "You've have successfully sent items request!";
    case TRAINEEDORMITORYCTRL_CREATED_TRAINEEDORMITORYSERVICEREQ = "Your service request has been sent successfully!";
    case TRAINEEDORMITORYCTRL_CANCEL_TRAINEEDORMITORYSERVICEREQ = "Service request has cancelled successfully!";


    /**
     * Summary of TRAINEEENROLLMENTCTRL
     */
    // case TRAINEEENROLLMENTCTRL_SEND_TRAINEEENROLLMENTREQ = "Enrollment request sent successfully";


}

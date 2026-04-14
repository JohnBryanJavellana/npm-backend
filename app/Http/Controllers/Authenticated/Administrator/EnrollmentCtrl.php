<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use App\Enums\Administrator\{
    EnrollmentEnum
};
use App\Enums\{
    AdministratorAuditActions,
    AdministratorReturnResponse
};
use App\Enums\NotificationEnum;
use App\Events\{
    BEAuditTrail,
    BEEnrollment,
    BETraineeApplication
};
use App\Http\Requests\Admin\Enrollment\{
    CreateOrUpdateCertificate,
    CreateOrUpdateCourse,
    CreateOrUpdateFacilitator,
    CreateOrUpdateLicense,
    CreateOrUpdateModule,
    CreateOrUpdateModuleType,
    CreateOrUpdateRank,
    CreateOrUpdateRequirement,
    CreateOrUpdateSchedule,
    CreateOrUpdateSchool,
    CreateOrUpdateSponsor,
    MoveTrainees,
    CreateOrUpdateVoucher,
    RemoveMainCertificate, RemoveMainCourse, RemoveMainSchool,
    RemoveModule,
    RemoveModuleType,
    RemoveSchedule, RemoveSponsor, RemoveVoucher
};
use App\Models\{
    ChargeCategory,
    CourseModule,
    CourseModuleFee,
    EnrolledCourse,
    EnrollmentInvoice,
    License,
    MainCertificate,
    MainCourse,
    MainSchool,
    ModuleType,
    Rank,
    Requirement,
    RequirementSpecificModule,
    Sponsor,
    TraineeRequirement,
    Training,
    TrainingFacilitator,
    TrainingRegFile,
    Voucher
};
use App\Services\Administrator\Enrollment\EnrollmentMainCertificateManager;
use App\Services\Administrator\Enrollment\EnrollmentMainCourseManager;
use App\Services\Administrator\Enrollment\EnrollmentMainSchoolManager;
use App\Services\Administrator\Enrollment\EnrollmentModuleManager;
use App\Services\Administrator\Enrollment\EnrollmentModuleTypeManager;
use App\Services\Administrator\Enrollment\EnrollmentRequirementManager;
use App\Services\Administrator\Enrollment\EnrollmentScheduleManager;
use App\Services\Administrator\Enrollment\EnrollmentSponsorManager;
use App\Services\Administrator\Enrollment\EnrollmentVoucherManager;
use App\Utils\{
    AuditHelper,
    GenerateTrace,
    Notifications, SaveFile,
    TransactionUtil
};
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Helpers\Administrator\General\CheckForDocumentExistence;
use App\Helpers\Administrator\General\CountCollection;

class EnrollmentCtrl extends Controller
{
    public function __construct(
        public EnrollmentScheduleManager $enrollmentScheduleManager,
        public EnrollmentModuleManager $enrollmentModuleManager,
        public EnrollmentModuleTypeManager $enrollmentModuleTypeManager,
        public EnrollmentMainCertificateManager $enrollmentMainCertificateManager,
        public EnrollmentMainSchoolManager $enrollmentMainSchoolManager,
        public EnrollmentMainCourseManager $enrollmentMainCourseManager,
        public EnrollmentRequirementManager $enrollmentRequirementManager,
        public EnrollmentVoucherManager $enrollmentVoucherManager,
        public EnrollmentSponsorManager $enrollmentSponsorManager
    ) {}

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of get_schedules
     * @param Request $request
     */
    public function get_schedules(Request $request)
    {
        return TransactionUtil::transact(null, [], function () {
            $schedules = Training::withCount(['hasData'])->get()->map(fn ($self) => [
                'main' => $self->toArray(),
                'module' => [
                    'main' => $self->module->toArray(),
                    'type' => $self->module->moduleType->toArray(),
                ],
            ])->values();

            return response()->json(['schedules' => $schedules], 200);
        });
    }

    /**
     * Summary of create_or_update_schedule
     * @param CreateOrUpdateSchedule $request
     */
    public function create_or_update_schedule(CreateOrUpdateSchedule $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === 'POST';
            $scheduleId = $request->scheduleId;

            $result = $this->enrollmentScheduleManager->createOrUpdate($request, $isPost, $scheduleId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of remove_schedule
     * @param RemoveSchedule $request
     * @param int $scheduleId
     */
    public function remove_schedule(RemoveSchedule $request, int $scheduleId)
    {
        return TransactionUtil::transact($request, [], function () use ($request, $scheduleId) {
            $result = $this->enrollmentScheduleManager->removeSchedule($scheduleId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of get_modules
     * @param Request $request
     */
    public function get_modules(Request $request)
    {
        return TransactionUtil::transact(null, [], function () {
            $modules = CourseModule::withCount(['hasData'])->with('moduleType')->get();
            return response()->json(['modules' => $modules], 200);
        });
    }

    /**
     * Summary of create_or_update_module
     * @param CreateOrUpdateModule $request
     */
    public function create_or_update_module(CreateOrUpdateModule $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === 'POST';
            $moduleId = $request->moduleId;

            $result = $this->enrollmentModuleManager->createOrUpdate($request, $isPost, $moduleId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of remove_module
     * @param RemoveModule $request
     * @param int $moduleId
     */
    public function remove_module(RemoveModule $request, int $moduleId)
    {
        return TransactionUtil::transact($request, [], function () use ($request, $moduleId) {
            $result = $this->enrollmentModuleManager->removeModule($moduleId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of get_module_types
     * @param Request $request
     */
    public function get_module_types(Request $request)
    {
        return TransactionUtil::transact(null, [], function () {
            $moduleTypes = ModuleType::withCount(['hasData'])->get();
            return response()->json(['moduleTypes' => $moduleTypes], 200);
        });
    }

    /**
     * Summary of create_or_update_module_type
     * @param CreateOrUpdateModuleType $request
     */
    public function create_or_update_module_type(CreateOrUpdateModuleType $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $moduleTypeId = $request->moduleTypeId;

            $result = $this->enrollmentModuleTypeManager->createOrUpdate($request, $isPost, $moduleTypeId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of remove_module_type
     * @param RemoveModuleType $request
     * @param int $moduleTypeId
     */
    public function remove_module_type(RemoveModuleType $request, int $moduleTypeId)
    {
        return TransactionUtil::transact($request, [], function () use ($request, $moduleTypeId) {
            $result = $this->enrollmentModuleTypeManager->removeModuleType($moduleTypeId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of get_certificates
     * @param Request $request
     */
    public function get_certificates(Request $request)
    {
        return TransactionUtil::transact(null, [], function () {
            $certificates = MainCertificate::withCount([
                'module',
                'hasData'
            ])->with('module:id,name')->get();

            return response()->json(['certificates' => $certificates], 200);
        });
    }

    /**
     * Summary of create_or_update_certificate
     * @param CreateOrUpdateCertificate $request
     */
    public function create_or_update_certificate(CreateOrUpdateCertificate $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $certificateId = $request->certificateId;

            $result = $this->enrollmentMainCertificateManager->createOrUpdate($request, $isPost, $certificateId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of remove_certificate
     * @param RemoveMainCertificate $request
     * @param int $certificateId
     */
    public function remove_certificate(RemoveMainCertificate $request, int $certificateId)
    {
        return TransactionUtil::transact($request, [], function () use ($request, $certificateId) {
            $result = $this->enrollmentMainCertificateManager->removeCertificate($certificateId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of get_schools
     * @param Request $request
     */
    public function get_schools(Request $request)
    {
        return TransactionUtil::transact(null, [], function () {
            $schools = MainSchool::withCount(['hasData'])->get();
            return response()->json(['schools' => $schools], 200);
        });
    }

    /**
     * Summary of create_or_update_school
     * @param CreateOrUpdateSchool $request
     */
    public function create_or_update_school(CreateOrUpdateSchool $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $schoolId = $request->schoolId;

            $result = $this->enrollmentMainSchoolManager->createOrUpdate($request, $isPost, $schoolId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of remove_school
     * @param RemoveMainSchool $request
     * @param int $schoolId
     */
    public function remove_school(RemoveMainSchool $request, int $schoolId)
    {
        return TransactionUtil::transact($request, [], function () use ($request, $schoolId) {
            $result = $this->enrollmentMainSchoolManager->removeSchool($schoolId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of get_courses
     * @param Request $request
     */
    public function get_courses(Request $request)
    {
        return TransactionUtil::transact(null, [], function () {
            $courses = MainCourse::withCount(['hasData'])->get();
            return response()->json(['courses' => $courses], 200);
        });
    }

    /**
     * Summary of create_or_update_course
     * @param CreateOrUpdateCourse $request
     */
    public function create_or_update_course(CreateOrUpdateCourse $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $courseId = $request->courseId;

            $result = $this->enrollmentMainCourseManager->createOrUpdate($request, $isPost, $courseId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of remove_course
     * @param RemoveMainCourse $request
     * @param int $courseId
     */
    public function remove_course(RemoveMainCourse $request, int $courseId)
    {
        return TransactionUtil::transact($request, [], function () use ($request, $courseId) {
            $result = $this->enrollmentMainCourseManager->removeCourse($courseId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of get_requirements
     * @param Request $request
     */
    public function get_requirements(Request $request)
    {
        return TransactionUtil::transact(null, [], function () {
            $requirements = Requirement::withCount([
                'hasData',
                'trainee_file',
                'forModules',
            ])->with('forModules')->get();

            return response()->json(['requirements' => $requirements], 200);
        });
    }

    /**
     * Summary of create_or_update_requirement
     * @param CreateOrUpdateRequirement $request
     */
    public function create_or_update_requirement(CreateOrUpdateRequirement $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $requirementId = $request->requirementId;

            $result = $this->enrollmentRequirementManager->createOrUpdate($request, $isPost, $requirementId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of remove_requirement
     * @param Request $request
     * @param int $requirementId
     */
    public function remove_requirement(Request $request, int $requirementId)
    {
        return TransactionUtil::transact(null, [], function () use ($request, $requirementId) {
            $result = $this->enrollmentRequirementManager->removeRequirement($requirementId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of get_vouchers
     * @param Request $request
     */
    public function get_vouchers(Request $request)
    {
        return TransactionUtil::transact(null, [], function () {
            $vouchers = Voucher::all();
            return response()->json(['vouchers' => $vouchers], 200);
        });
    }

    /**
     * Summary of create_or_update_voucher
     * @param CreateOrUpdateVoucher $request
     */
    public function create_or_update_voucher(CreateOrUpdateVoucher $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $voucherId = $request->voucherId;

            $result = $this->enrollmentVoucherManager->createOrUpdate($request, $isPost, $voucherId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of remove_voucher
     * @param RemoveVoucher $request
     * @param int $voucherId
     */
    public function remove_voucher(RemoveVoucher $request, int $voucherId)
    {
        return TransactionUtil::transact($request, [], function () use ($request, $voucherId) {
            $result = $this->enrollmentVoucherManager->removeVoucher($voucherId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of get_sponsors
     * @param Request $request
     */
    public function get_sponsors(Request $request)
    {
        return TransactionUtil::transact(null, [], function () {
            $sponsors = Sponsor::all();
            return response()->json(['sponsors' => $sponsors], 200);
        });
    }

    /**
     * Summary of create_or_update_sponsor
     * @param CreateOrUpdateSponsor $request
     */
    public function create_or_update_sponsor(CreateOrUpdateSponsor $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $sponsorId = $request->sponsorId;

            $result = $this->enrollmentSponsorManager->createOrUpdate($request, $isPost, $sponsorId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of remove_sponsor
     * @param RemoveSponsor $request
     * @param int $sponsorId
     */
    public function remove_sponsor(RemoveSponsor $request, int $sponsorId)
    {
        return TransactionUtil::transact($request, [], function () use ($request, $sponsorId) {
            $result = $this->enrollmentSponsorManager->removeSponsor($sponsorId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }




    # ✖️✖️✖️✖️✖️✖️✖️
    /**
     * Summary of get_applications
     * @param Request $request
     */
    public function get_applications(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $allRequirements = Requirement::where('status', 'ACTIVE')->get();
            $basicRequirements = $allRequirements->where('isBasic', 'YES');

            $query = EnrolledCourse::with([
                'training.module.charge',
                'training.module.moduleType',
                'training.module.specific_requirements',
                'trainee.additional_trainee_info.user',
                'trainee.additional_trainee_info.general_info',
                'trainee.additional_trainee_info.contact',
                'trainee.additional_trainee_info.educational_attainment.main_school',
                'trainee.additional_trainee_info.educational_attainment.main_course',
                'trainee.additional_trainee_info.latest_shipboard_attainment',
                'trainee.additional_trainee_info.basic_requirement',
                'trainee_requirement',
            ]);

            if ($request->applicationStatus) {
                $query->whereIn('enrolled_course_status', $request->applicationStatus);
            }

            if ($request->onlyWithRemarks) {
                $query->where(function ($q) {
                    $q->whereHas('trainee.additional_trainee_info.basic_requirement', fn($sub) => $sub->whereNotNull('remarks'))
                        ->orWhereHas('trainee_requirement', fn($sub) => $sub->whereNotNull('remarks'));
                });
            }

            if ($request->isExpired) {
                $query->where('isExpired', $request->isExpired);
            }

            $applications = $query->get()->map(function ($self) use ($allRequirements, $basicRequirements) {
                $addInfo = $self->trainee->additional_trainee_info;
                $courseSpecificReqs = $self->training->module->specific_requirements;
                $allRelevantReqs = $basicRequirements->concat($courseSpecificReqs)->unique('id');
                $traineeBasicReqs = $addInfo->basic_requirement->keyBy('requirement_id');
                $traineeCourseReqs = $self->trainee_requirement->keyBy('requirement_id');

                return [
                    'training' => [
                        'main' => [
                            'info' => $self->toArray(),
                            'charge' => $self->training->module->trainingFees()->latest()->first(),
                            'name' => [
                                'module' => $self->training->module,
                                'moduleType' => $self->training->module->moduleType,
                            ],
                        ],
                        'schedule' => $self->training,
                    ],
                    'trainee_info' => [
                        'account' => $addInfo->user,
                        'general_info' => $addInfo->general_info,
                        'contact' => $addInfo->contact,
                        'educational_attainment' => [
                            'main' => $addInfo->educational_attainment->first(),
                            'school' => $addInfo->educational_attainment->first()?->main_school,
                            'course' => $addInfo->educational_attainment->first()?->main_course,
                        ],
                        'shipboard' => $addInfo->latest_shipboard_attainment,
                        'basic_requirements' => $basicRequirements->map(function ($req) use ($traineeBasicReqs) {
                            $tr = $traineeBasicReqs->get($req->id);

                            return [
                                'id' => $tr->id ?? null,
                                'locked' => $tr->locked ?? null,
                                'requirement_info' => $req,
                                'remarks' => $tr->remarks ?? null,
                                'uploaded_file' => $tr->filename ?? null,
                            ];
                        })->values(),
                    ],
                    'requirements' => $allRelevantReqs->map(function ($req, $index) use ($traineeBasicReqs, $traineeCourseReqs) {
                        $tr = ($req->isBasic === EnrollmentEnum::BASIC_REQUIREMENT->value)
                            ? $traineeBasicReqs->get($req->id)
                            : $traineeCourseReqs->get($req->id);

                        return [
                            'index' => $index,
                            'id' => $tr->id ?? null,
                            'locked' => $tr->locked ?? null,
                            'requirement_info' => $req,
                            'remarks' => $tr->remarks ?? null,
                            'uploaded_file' => $tr->filename ?? null,
                        ];
                    })->values(),
                ];
            });

            return response()->json(['applications' => $applications], 200);
        });
    }

    /**
     * Summary of requirement_remark
     * @param Request $request
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     */
    public function requirement_remark(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $isPost = $request->httpMethod == 'POST';
            $this_remark = $request->isBasic === EnrollmentEnum::BASIC_REQUIREMENT->value
                ? TrainingRegFile::findOrFail($request->documentId)
                : TraineeRequirement::findOrFail($request->documentId);

            $this_remark->remarks = $request->remark ?? null;
            $this_remark->locked = EnrollmentEnum::UNVERIFIED_REQUIREMENT;
            $this_remark->save();

            AuditHelper::log(
                $request->user()->id,
                $isPost ? AdministratorAuditActions::ENROLLMENTCTRL_CREATED_ENROLLMENTREQUIREMENTSREMARK->value : AdministratorAuditActions::ENROLLMENTCTRL_UPDATED_ENROLLMENTREQUIREMENTSREMARK->value . " ID#$this_remark->id"
            );

            if (env('USE_EVENT')) {
                event(
                    new BETraineeApplication(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => ($isPost ? AdministratorReturnResponse::ENROLLMENTCTRL_CREATED_ENROLLMENTREQUIREMENTSREMARK->value : AdministratorReturnResponse::ENROLLMENTCTRL_UPDATED_ENROLLMENTREQUIREMENT->value). "ID# " . $this_remark->id], 201);
        });
    }

    /**
     * Summary of get_enrollment_count
     * @param Request $request
     */
    public function get_enrollment_count(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            return TransactionUtil::transact(null, [], function() use ($request) {
                $reservations = EnrolledCourse::query();

                $count = [
                    'total' => CountCollection::startCount($reservations),
                    'count_forVerification' => CountCollection::startCount($reservations->clone()->where('enrolled_course_status', EnrollmentEnum::RESERVED)),
                    'count_forEnrolled' => CountCollection::startCount($reservations->clone()->where('enrolled_course_status', EnrollmentEnum::ENROLLED)),
                    'count_forFinished' => CountCollection::startCount($reservations->clone()->where('enrolled_course_status', EnrollmentEnum::COMPLETED)),
                    'count_forPaid' => CountCollection::startCount($reservations->clone()->where('enrolled_course_status', EnrollmentEnum::PAID)),
                    'count_forProcessPayment' => CountCollection::startCount($reservations->clone()->where('enrolled_course_status', EnrollmentEnum::PROCESSING_PAYMENT)),
                    'count_forPayment' => CountCollection::startCount($reservations->clone()->where('enrolled_course_status', EnrollmentEnum::FOR_PAYMENT)),
                    'count_denied' => CountCollection::startCount($reservations->clone()->whereIn('enrolled_course_status', [EnrollmentEnum::CANCELLED, EnrollmentEnum::DECLINED, EnrollmentEnum::COURSE_STATUS_FULLY_BOOKED, EnrollmentEnum::INCOMPLETE_REQUIREMENTS])),
                    'count_remarks' => CountCollection::startCount(collect(json_decode($this->get_applications($request->merge(['onlyWithRemarks' => true]))->getContent(), true)['applications'])),
                ];

                return response()->json(['applicationCount' => $count], 200);
            });
        });
    }

    /**
     * Summary of lock_requirement
     * @param Request $request
     */
    public function lock_requirement(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $this_requirement = $request->isBasic === 'YES'
                ? TrainingRegFile::findOrFail($request->documentId)
                : TraineeRequirement::findOrFail($request->documentId);

            $this_requirement->locked = $request->locked === EnrollmentEnum::VERIFIED_REQUIREMENT->value
                ? EnrollmentEnum::UNVERIFIED_REQUIREMENT->value
                : EnrollmentEnum::VERIFIED_REQUIREMENT->value;

            $this_requirement->save();

            if (env('USE_EVENT')) {
                event(new BETraineeApplication(''));
            }
        });
    }

    /**
     * Summary of set_training_status
     * @param Request $request
     * @param bool notifications === FALSE
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     */
    public function set_training_status(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $this_training_status = EnrolledCourse::findOrFail($request->documentId);
            $this_training_status->enrolled_course_status = $request->status;
            $this_training_status->save();

            if ($request->status === EnrollmentEnum::FOR_PAYMENT->value) {
                $premade_record = new EnrollmentInvoice();
                $premade_record->enrolled_course_id = $request->documentId;
                $premade_record->user_id = $this_training_status->user_id;
                $premade_record->trace_number = GenerateTrace::createTraceNumber(EnrollmentInvoice::class, '-EAINV-');
                $premade_record->invoice_amount = $request->invoiceAmount;
                $premade_record->description = "Training Application";
                $premade_record->save();
            }

            Notifications::notify($request->user()->id, $this_training_status->user_id, NotificationEnum::DORMITORY, 'updated your enrollment application status.');
            AuditHelper::log(
                $request->user()->id,
                AdministratorAuditActions::ENROLLMENTCTRL_UPDATED_ENROLLMENTTRAININGSTATUS->value.  "ID#$this_training_status->id"
            );

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => AdministratorReturnResponse::ENROLLMENTCTRL_UPDATED_ENROLLMENTTRAININGSTATUS->value. "ID#" . $this_training_status->id], 201);
        });
    }

    /**
     * Summary of set_expired_status
     * @param Request $request
     * @param bool auditActions === FALSE
     * @param bool returnedMessage === FALSE
     */
    public function set_expired_status(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $this_training = EnrolledCourse::findOrFail($request->documentId);
            $this_training->enrolled_course_status = EnrollmentEnum::DECLINED;
            $this_training->isExpired = $request->isExpired;
            $this_training->save();

            AuditHelper::log($request->user()->id, AdministratorAuditActions::ENROLLMENTCTRL_UPDATED_ENROLLMENTEXPIREDSTATUS->value. ' ID# ' . $this_training->id);

            if (env('USE_EVENT')) {
                event(new BETraineeApplication(''));
            }

            return response()->json(['message' => AdministratorReturnResponse::ENROLLMENTCTRL_UPDATED_ENROLLMENTEXPIREDSTATUS->value. "ID# " . $this_training->id], 201);
        });
    }








    /**
     * Summary of get_licenses
     * @param Request $request
     */
    public function get_licenses(Request $request)
    {
        return TransactionUtil::transact(null, [], function () {
            $licenses = License::withCount(['hasData'])->get();
            return response()->json(['licenses' => $licenses], 200);
        });
    }

    /**
     * Summary of create_or_update_license
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param CreateOrUpdateLicense $request
     */
    public function create_or_update_license(CreateOrUpdateLicense $request)
    {
        return TransactionUtil::transact($request, ['rank:license:all'], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;

            $check = CheckForDocumentExistence::exists(
                Sponsor::class,
                [
                    'license' => $request->license,
                    'short_name' => $request->short_name
                ],
                !$isPost,
                $documentId,
                'id',
                "License already exist."
            );

            if ($check) return $check;

            $this_license = $isPost ? new License() : License::findOrFail($request->documentId);
            $this_license->short_name = $request->name;
            $this_license->license = $request->license;
            $this_license->save();

            AuditHelper::log(
                $request->user()->id,
                $isPost ? AdministratorAuditActions::ENROLLMENTCTRL_CREATED_ENROLLMENTLICENSE->value : AdministratorAuditActions::ENROLLMENTCTRL_UPDATED_ENROLLMENTLICENSE->value . " ID#$this_license->id"
            );

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => ($isPost ? AdministratorReturnResponse::ENROLLMENTCTRL_CREATED_ENROLLMENTLICENSE->value : AdministratorReturnResponse::ENROLLMENTCTRL_UPDATED_ENROLLMENTLICENSE->value). 'ID#' . $this_license->id], 201);
        });
    }

    /**
     * Summary of remove_license
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     * @param int $license_id
     */
    public function remove_license(Request $request, int $license_id)
    {
        return TransactionUtil::transact(null, ['rank:license:all'], function () use ($request, $license_id) {
            $this_license = License::withCount(['hasData'])->where('id', $license_id)->first();

            if ($this_license->has_data_count > 0) {
                return response()->json(['message' => AdministratorReturnResponse::ENROLLMENTCTRL_ERR_ENROLLMENTLICENSE->value], 409);
            } else {
                $this_license->delete();

                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::ENROLLMENTCTRL_REMOVED_ENROLLMENTLICENSE->value . " ID#$license_id"
                );

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => AdministratorReturnResponse::ENROLLMENTCTRL_REMOVED_ENROLLMENTLICENSE->value. "ID#$license_id"], 200);
            }
        });
    }

    /**
     * Summary of get_ranks
     * @param Request $request
     */
    public function get_ranks(Request $request)
    {
        return TransactionUtil::transact(null, [], function () {
            $ranks = Rank::withCount(['hasData'])->get();
            return response()->json(['ranks' => $ranks], 200);
        });
    }

    /**
     * Summary of create_or_update_rank
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param CreateOrUpdateRank $request
     */
    public function create_or_update_rank(CreateOrUpdateRank $request)
    {
        return TransactionUtil::transact($request, ['rank:license:all'], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;

            $check = CheckForDocumentExistence::exists(
                Rank::class,
                [
                    'name' => $request->name,
                    'short_name' => $request->short_name,
                    'type' => $request->type
                ],
                !$isPost,
                $documentId,
                'id',
                "Rank already exist."
            );

            if ($check) return $check;

            $this_rank = $isPost ? new Rank() : Rank::findOrFail($request->documentId);
            $this_rank->short_name = $request->short_name;
            $this_rank->name = $request->name;
            $this_rank->type = $request->type;
            $this_rank->save();

            AuditHelper::log(
                $request->user()->id,
                $isPost ? AdministratorAuditActions::ENROLLMENTCTRL_CREATED_ENROLLMENTLICENSE->value : AdministratorAuditActions::ENROLLMENTCTRL_UPDATED_ENROLLMENTLICENSE->value . " ID#$this_rank->id"
            );

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => ($isPost ? AdministratorReturnResponse::ENROLLMENTCTRL_CREATED_ENROLLMENTLICENSE->value : AdministratorReturnResponse::ENROLLMENTCTRL_UPDATED_ENROLLMENTLICENSE->value). 'ID# ' . $this_rank->id], 201);
        });
    }

    /**
     * Summary of remove_rank
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     * @param int $rank_id
     */
    public function remove_rank(Request $request, int $rank_id)
    {
        return TransactionUtil::transact(null, ['rank:license:all'], function () use ($request, $rank_id) {
            $this_rank = Rank::withCount(['hasData'])->where('id', $rank_id)->first();

            if ($this_rank->has_data_count > 0) {
                return response()->json(['message' => AdministratorReturnResponse::ENROLLMENTCTRL_ERR_ENROLLMENTRANK->value ], 409);
            } else {
                $this_rank->delete();

                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::ENROLLMENTCTRL_REMOVED_ENROLLMENTRANK->value . " ID#$rank_id"
                );

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => AdministratorReturnResponse::ENROLLMENTCTRL_REMOVED_ENROLLMENTRANK->value. "ID#$rank_id"], 200);
            }
        });
    }

    /**
     * Summary of get_facilitators
     * @param Request $request
     */
    public function get_facilitators(Request $request)
    {
        return TransactionUtil::transact(null, [], function () {
            $facilitators = TrainingFacilitator::withCount(['hasData'])->with([
                'facilitator',
                'module',
            ])->get();

            return response()->json(['facilitators' => $facilitators], 200);
        });
    }

    /**
     * Summary of create_or_update_facilitator
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param CreateOrUpdateFacilitator $request
     */
    public function create_or_update_facilitator(CreateOrUpdateFacilitator $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;

            $check = CheckForDocumentExistence::exists(
                TrainingFacilitator::class,
                [
                    'course_module_id' => $request->module,
                    'user_id' => $request->facilitator,
                    'role' => $request->role
                ],
                !$isPost,
                $documentId,
                'id',
                "Training Facilitator already exist."
            );

            if ($check) return $check;

            $this_facilitator = $isPost ? new TrainingFacilitator() : TrainingFacilitator::findOrFail($request->documentId);
            $this_facilitator->course_module_id = $request->module;
            $this_facilitator->user_id = $request->facilitator;
            $this_facilitator->role = $request->role;
            $this_facilitator->save();

            AuditHelper::log(
                $request->user()->id,
                $isPost ? AdministratorAuditActions::ENROLLMENTCTRL_CREATED_ENROLLMENTFACILITATOR->value : AdministratorAuditActions::ENROLLMENTCTRL_UPDATED_ENROLLMENTFACILITATOR->value . " ID#$this_facilitator->id"
            );

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' =>  ($isPost ? AdministratorReturnResponse::ENROLLMENTCTRL_CREATED_ENROLLMENTFACILITATOR->value : AdministratorReturnResponse::ENROLLMENTCTRL_UPDATED_ENROLLMENTFACILITATOR->value). 'ID# ' . $this_facilitator->id], 201);
        });
    }

    /**
     * Summary of remove_facilitator
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     * @param int $facilitator_id
     */
    public function remove_facilitator(Request $request, int $facilitator_id)
    {
        return TransactionUtil::transact(null, [], function () use ($request, $facilitator_id) {
            $this_facilitator = TrainingFacilitator::withCount(['hasData'])->where('id', $facilitator_id)->first();

            if ($this_facilitator->has_data_count > 0) {
                return response()->json(['message' => AdministratorReturnResponse::ENROLLMENTCTRL_ERR_ENROLLMENTFACILITATOR->value ], 409);
            } else {
                $this_facilitator->delete();

                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::ENROLLMENTCTRL_REMOVED_ENROLLMENTFACILITATOR->value. " ID#$facilitator_id"
                );

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => AdministratorReturnResponse::ENROLLMENTCTRL_REMOVED_ENROLLMENTFACILITATOR->value. " ID#$facilitator_id"], 200);
            }
        });
    }

    /**
     * Summary of get_course_module_fees
     * @param Request $request
     */
    public function get_course_module_fees(Request $request)
    {
        return TransactionUtil::transact(null, [], function () {
            $course_module_fees = CourseModuleFee::with([
                'category',
                'module',
            ])->get();

            return response()->json(['courseModuleFees' => $course_module_fees], 200);
        });
    }

    /**
     * Summary of get_training_fees_predata
     * @param Request $request
     */
    public function get_training_fees_predata(Request $request)
    {
        return TransactionUtil::transact(null, [], function () {
            $modules = CourseModule::all();
            $categories = ChargeCategory::all();

            return response()->json([
                'modules' => $modules,
                'categories' => $categories,
            ], 200);
        });
    }

    /**
     * Summary of create_or_update_course_fee
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     */
    public function create_or_update_course_fee(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;

            $check = CheckForDocumentExistence::exists(
                CourseModuleFee::class,
                [
                    'course_module_id' => $request->module,
                    'charge_category_id' => $request->category,
                    'name' => $request->name,
                    'amount' => $request->amount
                ],
                !$isPost,
                $documentId,
                'id',
                "Course Module Fee already exist."
            );

            if ($check) return $check;

            $this_course_fee = $isPost ? new CourseModuleFee() : CourseModuleFee::findOrFail($request->documentId);
            $this_course_fee->course_module_id = $request->module;
            $this_course_fee->charge_category_id = $request->category;
            $this_course_fee->name = $request->name;
            $this_course_fee->amount = $request->amount;
            if (!$isPost) $this_course_fee->status = $request->status;
            $this_course_fee->save();

            AuditHelper::log(
                $request->user()->id,
                $isPost ? AdministratorAuditActions::ENROLLMENTCTRL_CREATED_ENROLLMENTTRAININGFEE->value : AdministratorAuditActions::ENROLLMENTCTRL_UPDATED_ENROLLMENTTRAININGFEE->value . " ID#$this_course_fee->id"
            );

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => ($isPost ? AdministratorReturnResponse::ENROLLMENTCTRL_CREATED_ENROLLMENTTRAININGFEE->value : AdministratorReturnResponse::ENROLLMENTCTRL_UPDATED_ENROLLMENTTRAININGFEE->value).'ID# ' . $this_course_fee->id], 201);
        });
    }

    /**
     * Summary of remove_course_fee
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     * @param int $course_fee_id
     */
    public function remove_course_fee(Request $request, int $course_fee_id)
    {
        return TransactionUtil::transact(null, [], function () use ($request, $course_fee_id) {
            $this_course_fee = CourseModuleFee::where('id', $course_fee_id)->first();

            if ($this_course_fee->has_data_count > 0) {
                return response()->json(['message' => AdministratorReturnResponse::ENROLLMENTCTRL_ERR_ENROLLMENTTRAININGFEE->value], 409);
            } else {
                $this_course_fee->delete();

                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::ENROLLMENTCTRL_REMOVED_ENROLLMENTTRAININGFEE->value. " ID#$course_fee_id"
                );

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => AdministratorReturnResponse::ENROLLMENTCTRL_REMOVED_ENROLLMENTTRAININGFEE->value. "ID#$course_fee_id"], 200);
            }
        });
    }

    /**
     * Summary of get_trainees_by_schedule
     * @param Request $request
     */
    public function get_trainees_by_schedule(Request $request){
        return TransactionUtil::transact(null, [], function () use ($request) {
            $scheduleId = $request->scheduleId;
            $trainees = EnrolledCourse::with('trainee')
                ->where('training_id', $scheduleId)
                ->get();

            return response()->json(['trainees' => $trainees], 200);
        });
    }

    /**
     * Move trainees to another schedule
     * @param Request $request
     */
    public function move_trainees(MoveTrainees $request) {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $fromScheduleId = $request->fromScheduleId;
            $toScheduleId   = $request->toScheduleId;
            $enrollmentIds  = $request->enrollmentIds;
            $moved  = [];
            $errors = [];

            foreach ($enrollmentIds as $enrollmentId) {
                $application = EnrolledCourse::where([
                    'id'          => $enrollmentId,
                    'training_id' => $fromScheduleId,
                ])->first();

                if (!$application) {
                    $errors[] = ['id' => $enrollmentId, 'message' => "Enrollment ID#$enrollmentId not found on schedule ID#$fromScheduleId."];
                    continue;
                }

                if (!\in_array($application->enrolled_course_status, [EnrollmentEnum::ENROLLED->value, EnrollmentEnum::RESERVED->value], true)) {
                    $errors[] = [
                        'id'      => $enrollmentId,
                        'status'  => $application->enrolled_course_status,
                        'message' => "Cannot move enrollment ID#$enrollmentId with status '{$application->enrolled_course_status}'.",
                    ];
                    continue;
                }

                $application->training_id = $toScheduleId;
                $application->save();

                $moved[] = $application->id;
            }

            AuditHelper::log(
                $request->user()->id,
                AdministratorAuditActions::ENROLLMENTCTRL_MOVED_TRAINEE->value . "ID#$fromScheduleId to ID#$toScheduleId"
            );

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail('')
                );
            }

            $message = !empty($moved)
                    ? AdministratorReturnResponse::ENROLLMENTCTRL_MOVED_TRAINEE_SUCCESS->value . " Moved " . count($moved) . " trainee(s) from schedule ID#$fromScheduleId to ID#$toScheduleId."
                    : AdministratorReturnResponse::ENROLLMENTCTRL_MOVED_TRAINEE_FAILED->value;

            return response()->json([
                'message' => $message,
                'moved'   => $moved,
                'errors'  => $errors,
            ], !empty($moved) ? 200 : 422);
        });
    }
}


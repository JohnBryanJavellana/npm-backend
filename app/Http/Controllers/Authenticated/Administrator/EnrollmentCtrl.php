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
    CreateOrUpdateVoucher
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
use App\Utils\{
    AuditHelper,
    ConvertToBase64,
    GenerateTrace,
    Notifications,
    TransactionUtil
};
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Helpers\Administrator\General\CheckForDocumentExistence;
use App\Helpers\Administrator\General\CountCollection;

class EnrollmentCtrl extends Controller
{
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
                            'charge' => $self->training->module->trainingFees()->latest()->first()->toArray(),
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
                $isPost ? AdministratorAuditActions::ENROLLMENTCTRL_CREATED_ENROLLMENTREQUIREREMARKS->value : AdministratorAuditActions::ENROLLMENTCTRL_UPDATED_ENROLLMENTREQUIREREMARKS->value . " ID#$this_remark->id"
            );

            if (env('USE_EVENT')) {
                event(
                    new BETraineeApplication(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => $isPost ? AdministratorReturnResponse::ENROLLMENTCTRL_CREATED_ENROLLMENTREMARK->value : AdministratorReturnResponse::ENROLLMENTCTRL_UPDATED_ENROLLMENTREMARK->value . " ID#$this_remark->id"], 201);
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
                $premade_record->save();
            }

            Notifications::notify($request->user()->id, $this_training_status->user_id, NotificationEnum::DORMITORY, 'updated your enrollment application status.');
            AuditHelper::log(
                $request->user()->id,
                AdministratorAuditActions::ENROLLMENTCTRL_UPDATED_ENROLLMENTAPPSTAT->value . " ID#$this_training_status->id"
            );

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've Updated enrollment application status ID#" . $this_training_status->id], 201);
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

            AuditHelper::log($request->user()->id, 'User has updated an enrolled course expiry status ID# ' . $this_training->id);

            if (env('USE_EVENT')) {
                event(new BETraineeApplication(''));
            }

            return response()->json(['message' => "You've updated an enrolled course expiry statusID# " . $this_training->id], 201);
        });
    }

    /**
     * Summary of get_schedules
     * @param Request $request
     */
    public function get_schedules(Request $request)
    {
        return TransactionUtil::transact(null, [], function () {
            $schedules = Training::withCount(['hasData'])->get()->map(function ($self) {
                return [
                    'main' => $self->toArray(),
                    'module' => [
                        'main' => $self->module->toArray(),
                        'type' => $self->module->moduleType->toArray(),
                    ],
                ];
            })->values();

            return response()->json(['schedules' => $schedules], 200);
        });
    }

    /**
     * Summary of create_or_update_schedule
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param CreateOrUpdateSchedule $request
     */
    public function create_or_update_schedule(CreateOrUpdateSchedule $request)
    {
        return TransactionUtil::transact($request, ['schedules_cache'], function () use ($request) {
            $isPost = $request->httpMethod === 'POST';
            $this_schedule = $isPost
                ? new Training()
                : Training::findOrFail($request->documentId);

            $this_schedule->id = $isPost
                ? Carbon::now()->year . str_pad((int) substr(Training::max('id'), 4) + 1, 4, 0, STR_PAD_LEFT)
                : $request->documentId;

            $this_schedule->course_module_id = $request->module;
            $this_schedule->schedule_from = Carbon::parse($request->fromDate);
            $this_schedule->schedule_to = Carbon::parse($request->toDate);
            $this_schedule->schedule_slot = $request->slot;
            $this_schedule->venue = $request->venue;
            $this_schedule->room = $request->room;
            $this_schedule->batch_number = $request->batch;
            $this_schedule->schedule_preference = $request->preference;
            $this_schedule->daily_hours = $request->dailyHour;
            if ($request->status) {
                $this_schedule->status = $request->status;
            }
            $this_schedule->save();

            AuditHelper::log(
                $request->user()->id,
                $isPost ? AdministratorAuditActions::ENROLLMENTCTRL_CREATED_ENROLLMENTSCHED->value : AdministratorAuditActions::ENROLLMENTCTRL_UPDATED_ENROLLMENTSCHED->value . " ID#$this_schedule->id"
            );

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($isPost ? 'created' : 'updated') . ' a schedule. OKID# ' . $this_schedule->id], 200);
        });
    }

    /**
     * Summary of remove_schedule
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     * @param int $schedule_id
     */
    public function remove_schedule(Request $request, int $schedule_id)
    {
        return TransactionUtil::transact(null, ['schedules_cache'], function () use ($request, $schedule_id) {
            $this_schedule = Training::withCount(['hasData'])->where('id', $schedule_id)->first();

            if ($this_schedule->has_data_count > 0) {
                return response()->json(['message' => "Can't remove schedule. It already has connected data"], 409);
            } else {
                $this_schedule->delete();
                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::ENROLLMENTCTRL_REMOVED_ENROLLMENTSCHED->value . " ID#$schedule_id"
                );

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed schedule ID#$schedule_id"], 200);
            }
        });
    }

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
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param CreateOrUpdateModule $request
     */
    public function create_or_update_module(CreateOrUpdateModule $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === 'POST';

            $this_module = $isPost ? new CourseModule() : CourseModule::findOrFail($request->documentId);
            $this_module->module_type_id = $request->module;
            $this_module->name = $request->name;
            $this_module->acronym = $request->short_name;
            $this_module->compendium = $request->compendium;
            if ($request->status) {
                $this_module->status = $request->status;
            }
            $this_module->save();

            AuditHelper::log(
                $request->user()->id,
                $isPost ? AdministratorAuditActions::ENROLLMENTCTRL_CREATED_ENROLLMENTMOD->value : AdministratorAuditActions::ENROLLMENTCTRL_UPDATED_ENROLLMENTMOD->value . " ID#$this_module->id"
            );

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($isPost ? 'created' : 'updated') . ' a module. OKID#' . $this_module->id], 201);
        });
    }

    /**
     * Summary of remove_module
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     * @param int $module_id
     */
    public function remove_module(Request $request, int $module_id)
    {
        return TransactionUtil::transact(null, [], function () use ($request, $module_id) {
            $this_module = CourseModule::withCount(['hasData'])->where('id', $module_id)->first();

            if ($this_module->has_data_count > 0) {
                return response()->json(['message' => "Can't remove module. It already has connected data"], 409);
            } else {
                $this_module->delete();
                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::ENROLLMENTCTRL_REMOVED_ENROLLMENTMOD->value . " ID#$module_id"
                );

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed a module. OKID#$module_id"], 200);
            }
        });
    }

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
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param CreateOrUpdateModuleType $request
     */
    public function create_or_update_module_type(CreateOrUpdateModuleType $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;

            $check = CheckForDocumentExistence::exists(
                ModuleType::class,
                [ 'name' => $request->name ],
                !$isPost,
                $documentId,
                'id',
                "Module Type already exist."
            );

            if ($check) return $check;

            $this_module_type = $isPost ? new ModuleType() : ModuleType::findOrFail($request->documentId);
            $this_module_type->name = $request->name;
            if (!$isPost) $this_module_type->status = $request->status;
            $this_module_type->save();

            AuditHelper::log(
                $request->user()->id,
                $isPost ? AdministratorAuditActions::ENROLLMENTCTRL_CREATED_ENROLLMENTMODTYPE->value : AdministratorAuditActions::ENROLLMENTCTRL_UPDATED_ENROLLMENTMODTYPE->value . " ID#$this_module_type->id"
            );

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($isPost ? 'created' : 'updated') . ' a module type ID#' . $this_module_type->id], 201);
        });
    }

    /**
     * Summary of remove_module_type
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     * @param int $module_type_id
     */
    public function remove_module_type(Request $request, int $module_type_id)
    {
        return TransactionUtil::transact(null, [], function () use ($request, $module_type_id) {
            $this_module_type = ModuleType::withCount(['hasData'])->where('id', $module_type_id)->first();

            if ($this_module_type->has_data_count > 0) {
                return response()->json(['message' => "Can't remove module type. It already has connected data"], 409);
            } else {
                $this_module_type->delete();
                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::ENROLLMENTCTRL_REMOVED_ENROLLMENTMODTYPE->value . " ID#$module_type_id"
                );

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed module type ID#$module_type_id"], 200);
            }
        });
    }

    /**
     * Summary of get_certificates
     * @param Request $request
     */
    public function get_certificates(Request $request)
    {
        return TransactionUtil::transact(null, [], function () {
            $certificates = MainCertificate::withCount(['module' => function ($query) {
                return $query->whereHas('schedules', function ($schedulesQuery) {
                    return $schedulesQuery->whereHas('hasData');
                });
            }])->with('module')->get();

            return response()->json(['certificates' => $certificates], 200);
        });
    }

    /**
     * Summary of create_or_update_certificate
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param CreateOrUpdateCertificate $request
     */
    public function create_or_update_certificate(CreateOrUpdateCertificate $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === 'POST';

            $this_certificate = $isPost ? new MainCertificate() : MainCertificate::findOrFail($request->documentId);
            $this_certificate->course_module_id = $request->module;
            $this_certificate->name = $request->name;
            $this_certificate->header = $request->header;
            $this_certificate->header_1 = $request->header_1;
            $this_certificate->header_2 = $request->header_2;
            $this_certificate->body = $request->body;
            $this_certificate->save();

            AuditHelper::log(
                $request->user()->id,
                $isPost ? AdministratorAuditActions::ENROLLMENTCTRL_CREATED_ENROLLMENTCERT->value : AdministratorAuditActions::ENROLLMENTCTRL_UPDATED_ENROLLMENTCERT->value . " ID#$this_certificate->id"
            );

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($isPost ? 'created' : 'updated') . ' a certificate ID#' . $this_certificate->id], 201);
        });
    }

    /**
     * Summary of remove_certificate
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     * @param int $certificate_id
     */
    public function remove_certificate(Request $request, int $certificate_id)
    {
        return TransactionUtil::transact(null, [], function () use ($request, $certificate_id) {
            $this_certificate = MainCertificate::withCount(['module' => function ($query) {
                return $query->whereHas('schedules', function ($schedulesQuery) {
                    return $schedulesQuery->whereHas('hasData');
                });
            }])->where('id', $certificate_id)->first();

            if ($this_certificate->module_count > 0) {
                return response()->json(['message' => "Can't remove certificate. It already has connected data"], 409);
            } else {
                $this_certificate->delete();
                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::ENROLLMENTCTRL_REMOVED_ENROLLMENTCERT->value . " ID#$certificate_id"
                );

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed a certificate. OKID#$certificate_id"], 200);
            }
        });
    }

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
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param CreateOrUpdateRequirement $request
     */
    public function create_or_update_requirement(CreateOrUpdateRequirement $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === 'POST';

            $this_requirement = $isPost ? new Requirement() : Requirement::findOrFail($request->documentId);
            $this_requirement->name = $request->name;
            $this_requirement->description = $request->description;
            $this_requirement->isRequired = $request->requiredStatus;
            $this_requirement->isBasic = $request->type;
            if ($request->status) {
                $this_requirement->status = $request->status;
            }

            if ($request->upload_reference) {
                if ($this_requirement->upload_reference !== null && file_exists(public_path('upload-reference/' . $this_requirement->upload_reference))) {
                    unlink(public_path('upload-reference/' . $this_requirement->upload_reference));
                }

                $image_name = Str::uuid() . '-upload-reference-.png';
                $image = $request->upload_reference;
                ConvertToBase64::generate($image, 'image', "upload-reference/$image_name");
                $this_requirement->upload_reference = $image_name;
            }

            $this_requirement->save();

            if ($request->module) {
                foreach ($request->module as $module) {
                    $checkExistence = RequirementSpecificModule::where([
                        'requirement_id' => $this_requirement->id,
                        'course_module_id' => $module,
                    ])->count();

                    if ($checkExistence <= 0) {
                        $specific_module = new RequirementSpecificModule;
                        $specific_module->requirement_id = $this_requirement->id;
                        $specific_module->course_module_id = $module;
                        $specific_module->save();
                    }
                }
            }

            AuditHelper::log(
                $request->user()->id,
                $isPost ? AdministratorAuditActions::ENROLLMENTCTRL_CREATED_ENROLLMENTREQUIREMENT->value : AdministratorAuditActions::ENROLLMENTCTRL_UPDATED_ENROLLMENTREQUIREMENT->value . " ID#$this_requirement->id"
            );

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($isPost ? 'created' : 'updated') . ' a requirement ID#' . $this_requirement->id], 201);
        });
    }

    /**
     * Summary of remove_requirement
     * @param Request $request
     * @param int $requirement_id
     */
    public function remove_requirement(Request $request, int $requirement_id)
    {
        return TransactionUtil::transact(null, [], function () use ($request, $requirement_id) {
            $this_requirement = Requirement::withCount(['hasData', 'trainee_file'])->where('id', $requirement_id)->first();

            if ($this_requirement->has_data_count > 0 || $this_requirement->trainee_file_count > 0 || $this_requirement->for_modules_count > 0) {
                return response()->json(['message' => "Can't remove requirement. It already has connected data"], 409);
            } else {
                $this_requirement->delete();

                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::ENROLLMENTCTRL_REMOVED_ENROLLMENTREQUIREMENT->value . " ID#$requirement_id"
                );

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed requirement ID#$requirement_id"], 200);
            }
        });
    }

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
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param CreateOrUpdateSchool $request
     */
    public function create_or_update_school(CreateOrUpdateSchool $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;

            $check = CheckForDocumentExistence::exists(
                MainSchool::class,
                [
                    'name' => $request->name,
                    'school_address' => $request->address
                ],
                !$isPost,
                $documentId,
                'id',
                "School details already exist."
            );

            if ($check) return $check;

            $this_school = $isPost ? new MainSchool() : MainSchool::findOrFail($request->documentId);
            $this_school->school_name = $request->name;
            $this_school->school_address = $request->address;
            if (!$isPost) $this_school->school_status = $request->status;
            $this_school->save();

            AuditHelper::log(
                $request->user()->id,
                $isPost ? AdministratorAuditActions::ENROLLMENTCTRL_CREATED_ENROLLMENTSCHL->value : AdministratorAuditActions::ENROLLMENTCTRL_UPDATED_ENROLLMENTSCHL->value . " ID#$this_school->id"
            );

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($isPost ? 'Created' : 'Updated') . ' a school ID#' . $this_school->id], 200);
        });
    }

    /**
     * Summary of remove_school
     * @param Request $request
     * @param int $school_id
     */
    public function remove_school(Request $request, int $school_id)
    {
        return TransactionUtil::transact(null, [], function () use ($request, $school_id) {
            $this_school = MainSchool::withCount(['hasData'])->where('id', $school_id)->first();

            if ($this_school->has_data_count > 0) {
                return response()->json(['message' => "Can't remove school. It already has connected data"], 409);
            } else {
                $this_school->delete();

                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::ENROLLMENTCTRL_REMOVED_ENROLLMENTSCHL->value . " ID#$school_id"
                );

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed a school. OKID#$school_id"], 200);
            }
        });
    }

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
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param CreateOrUpdateCourse $request
     */
    public function create_or_update_course(CreateOrUpdateCourse $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;

            $check = CheckForDocumentExistence::exists(
                MainCourse::class,
                ['course_name' => $request->name],
                !$isPost,
                $documentId,
                'id',
                "Course details already exist."
            );

            if ($check) return $check;

            $this_course = $isPost ? new MainCourse() : MainCourse::findOrFail($request->documentId);
            $this_course->course_name = $request->name;
            if (!$isPost) $this_course->course_status = $request->status;
            $this_course->save();

            AuditHelper::log(
                $request->user()->id,
                $isPost ? AdministratorAuditActions::ENROLLMENTCTRL_CREATED_ENROLLMENTCOURSE->value : AdministratorAuditActions::ENROLLMENTCTRL_UPDATED_ENROLLMENTCOURSE->value . " ID#$this_course->id"
            );

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($isPost ? 'created' : 'updated') . ' a course. ID#' . $this_course->id], 201);
        });
    }

    /**
     * Summary of remove_course
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     * @param int $course_id
     */
    public function remove_course(Request $request, int $course_id)
    {
        return TransactionUtil::transact(null, [], function () use ($request, $course_id) {
            $this_course = MainCourse::withCount(['hasData'])->where('id', $course_id)->first();

            if ($this_course->has_data_count > 0) {
                return response()->json(['message' => "Can't remove course. It already has connected data"], 409);
            } else {
                $this_course->delete();

                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::ENROLLMENTCTRL_REMOVED_ENROLLMENTCOURSE->value . " ID#$course_id"
                );

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed course ID#$course_id"], 200);
            }
        });
    }

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
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param CreateOrUpdateVoucher $request
     */
    public function create_or_update_voucher(CreateOrUpdateVoucher $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;

            $check = CheckForDocumentExistence::exists(
                Voucher::class,
                [
                    'name' => $request->name,
                    'code' => $request->code
                ],
                !$isPost,
                $documentId,
                'id',
                "Voucher already exist."
            );

            if ($check) return $check;

            $this_voucher = $isPost ? new Voucher() : Voucher::findOrFail($request->documentId);
            $this_voucher->name = $request->name;
            $this_voucher->code = $request->code;
            if (!$isPost) $this_voucher->status = $request->status;
            $this_voucher->save();

            AuditHelper::log(
                $request->user()->id,
                $isPost ? AdministratorAuditActions::ENROLLMENTCTRL_CREATED_ENROLLMENTVOUCHER->value : AdministratorAuditActions::ENROLLMENTCTRL_UPDATED_ENROLLMENTVOUCHER->value . " ID#$this_voucher->id"
            );

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($isPost ? 'created' : 'updated') . ' a voucher ID#' . $this_voucher->id], 201);
        });
    }

    /**
     * Summary of remove_voucher
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     * @param int $voucher_id
     */
    public function remove_voucher(Request $request, int $voucher_id)
    {
        return TransactionUtil::transact(null, [], function () use ($request, $voucher_id) {
            $this_voucher = Voucher::where('id', $voucher_id)->first();

            if ($this_voucher->has_data_count > 0 && $this_voucher->has_data_count > 0) {
                return response()->json(['message' => "Can't remove voucher. It already has connected data"], 409);
            } else {
                $this_voucher->delete();
                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::ENROLLMENTCTRL_REMOVED_ENROLLMENTVOUCHER->value . " ID#$voucher_id"
                );

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed voucher. OKID#$voucher_id"], 200);
            }
        });
    }

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
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param CreateOrUpdateSponsor $request
     */
    public function create_or_update_sponsor(CreateOrUpdateSponsor $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;

            $check = CheckForDocumentExistence::exists(
                Sponsor::class,
                [
                    'name' => $request->name,
                    'short_name' => $request->short_name
                ],
                !$isPost,
                $documentId,
                'id',
                "Sponsor already exist."
            );

            if ($check) return $check;

            $this_sponsor = $isPost ? new Sponsor() : Sponsor::findOrFail($request->documentId);
            $this_sponsor->name = $request->name;
            $this_sponsor->short_name = $request->short_name;
            if (!$isPost) $this_sponsor->status = $request->status;
            $this_sponsor->save();

            AuditHelper::log(
                $request->user()->id,
                $isPost ? AdministratorAuditActions::ENROLLMENTCTRL_CREATED_ENROLLMENTSPNSR->value : AdministratorAuditActions::ENROLLMENTCTRL_UPDATED_ENROLLMENTSPNSR->value . " ID#$this_sponsor->id"
            );

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($isPost ? 'created' : 'updated') . ' a sponsor ID#' . $this_sponsor->id], 201);
        });
    }

    /**
     * Summary of remove_sponsor
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     * @param int $sponsor_id
     */
    public function remove_sponsor(Request $request, int $sponsor_id)
    {
        return TransactionUtil::transact(null, [], function () use ($request, $sponsor_id) {
            $this_sponsor = Sponsor::where('id', $sponsor_id)->first();

            if (!$this_sponsor) {
                return response()->json(['message' => "Can't remove sponsor. It already has connected data"], 409);
            } else {
                $this_sponsor->delete();
                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::ENROLLMENTCTRL_REMOVED_ENROLLMENTSPNSR->value . " ID#$sponsor_id"
                );

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed a sponsor. OKID#$sponsor_id"], 200);
            }
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

            return response()->json(['message' => "You've " . ($isPost ? 'created' : 'updated') . ' a license ID#' . $this_license->id], 201);
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
                return response()->json(['message' => "Can't remove license. It already has connected data"], 409);
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

                return response()->json(['message' => "You've removed license ID#$license_id"], 200);
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
                $isPost ? AdministratorAuditActions::ENROLLMENTCTRL_CREATED_ENROLLMENTRANK->value : AdministratorAuditActions::ENROLLMENTCTRL_UPDATED_ENROLLMENTRANK->value . " ID#$this_rank->id"
            );

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($isPost ? 'created' : 'updated') . ' a rank ID# ' . $this_rank->id], 201);
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
                return response()->json(['message' => "Can't remove rank. It already has connected data"], 409);
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

                return response()->json(['message' => "You've removed rank ID#$rank_id"], 200);
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

            return response()->json(['message' => "You've " . ($isPost ? 'created' : 'updated') . ' a facilitator ID# ' . $this_facilitator->id], 201);
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
                return response()->json(['message' => "Can't remove facilitator. It already has connected data"], 409);
            } else {
                $this_facilitator->delete();

                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::ENROLLMENTCTRL_REMOVED_ENROLLMENTFACILITATOR->value . " ID#$facilitator_id"
                );

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed facilitator. OKID#$facilitator_id"], 200);
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

            return response()->json(['message' => "You've " . ($isPost ? 'created' : 'updated') . ' a training fee ID# ' . $this_course_fee->id], 201);
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
                return response()->json(['message' => "Can't remove training fee. It already has connected data"], 409);
            } else {
                $this_course_fee->delete();

                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::ENROLLMENTCTRL_REMOVED_ENROLLMENTTRAININGFEE->value . " ID#$course_fee_id"
                );

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed training fee ID#$course_fee_id"], 200);
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
    public function move_trainees(Request $request)
{
    // CREATE REQUEST FILE 🥲
    // validate if ids in $request->enrollmentIds actually exists
    // Moved outside TransactionUtil so ValidationException isn't swallowed
    $request->validate([
        'fromScheduleId'  => 'required|exists:trainings,id',
        'toScheduleId'    => 'required|exists:trainings,id|different:fromScheduleId',
        'enrollmentIds'   => 'required|array',
        'enrollmentIds.*' => 'required|integer|exists:enrolled_courses,id',
    ]);

    return TransactionUtil::transact(null, [], function () use ($request) {
        $fromScheduleId = $request->fromScheduleId;
        $toScheduleId   = $request->toScheduleId;
        $enrollmentIds  = $request->enrollmentIds;

        $moved  = [];
        $errors = [];

        // Only allow moving enrollments in these statuses
        $allowedStatuses = [
            EnrollmentEnum::ENROLLED->value,
            EnrollmentEnum::RESERVED->value,
        ];

        foreach ($enrollmentIds as $enrollmentId) {
            $application = EnrolledCourse::where([
                'id'          => $enrollmentId,
                'training_id' => $fromScheduleId,
            ])->first();

            // validate application status. use Enums\Administrator\EnrollmentEnum.php
            // add to $moved the success.
            // create new array for errors with their corresponding error message
            if (!$application) {
                $errors[] = [
                    'id'      => $enrollmentId,
                    'message' => "Enrollment ID#$enrollmentId not found on schedule ID#$fromScheduleId.",
                ];
                continue;
            }

            if (!in_array($application->enrolled_course_status, $allowedStatuses, true)) {
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

        // create a new case message. add in Enums\AdministratorAuditActions.php
        // AuditHelper::log(
        //     $request->user()->id,
        //     AdministratorAuditActions::ENROLLMENTCTRL_MOVED_TRAINEE->value
        //         . " Moved " . count($moved) . " trainee(s) from schedule ID#$fromScheduleId to ID#$toScheduleId"
        // );

        if (env('USE_EVENT')) {
            event(
                new BEEnrollment(''),
                new BEAuditTrail('')
            );
        }

        // enhance message return
        // create a new case message. add in Enums\AdministratorReturnResponse.php
        return response()->json([
            'message' => "Moved Schedule succeeded",
            'moved'   => $moved,
            'errors'  => $errors,
        ], !empty($moved) ? 200 : 422);
    });
}
}


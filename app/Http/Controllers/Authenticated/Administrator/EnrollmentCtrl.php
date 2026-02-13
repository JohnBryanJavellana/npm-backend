<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use App\Enums\Administrator\EnrollmentEnum;
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

class EnrollmentCtrl extends Controller
{
    /**
     * Summary of get_applications
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
     */
    public function requirement_remark(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $this_remark = $request->isBasic === EnrollmentEnum::BASIC_REQUIREMENT->value
                ? TrainingRegFile::findOrFail($request->documentId)
                : TraineeRequirement::findOrFail($request->documentId);

            $this_remark->remarks = $request->remark ?? null;
            $this_remark->locked = EnrollmentEnum::UNVERIFIED_REQUIREMENT;
            $this_remark->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod == 'POST' ? 'Created' : 'Updated') . ' a remark. ID# ' . $this_remark->id);

            if (env('USE_EVENT')) {
                event(
                    new BETraineeApplication(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod == 'POST' ? 'created' : 'updated') . ' a remark. ID# ' . $this_remark->id], 201);
        });
    }

    /**
     * Summary of get_enrollment_count
     * @param Request $request
     */
    public function get_enrollment_count(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $couse_status = [
                'PENDING',
                'RESERVED',
                'ENROLLED',
                'COMPLETED',
                'CANCELLED',
                'PAID',
                'DECLINED',
                'FOR-PAYMENT',
                'IR',
                'CSFB',
                'PROCESSING PAYMENT'
            ];

            $counts = EnrolledCourse::whereIn('enrolled_course_status', $couse_status)
                ->selectRaw('enrolled_course_status, COUNT(*) as total')
                ->groupBy('enrolled_course_status')
                ->pluck('total', 'enrolled_course_status');

            return response()->json([
                'count_forVerification'  => min($counts['RESERVED'] ?? 0,),
                'count_forEnrolled'  => min($counts['ENROLLED'] ?? 0,),
                'count_forFinished'  => min($counts['COMPLETED'] ?? 0,),
                'count_forPaid'  => min($counts['PAID'] ?? 0,),
                'count_forProcessPayment' => min($counts['PROCESSING PAYMENT'] ?? 0,),
                'count_forPayment' => min($counts['FOR-PAYMENT'] ?? 0,),
                'count_denied' => min($counts['DECLINED'] ?? 0,) + min($counts['CSFB'] ?? 0,) + min($counts['CANCELLED'] ?? 0,),
                'count_remarks' => count(json_decode($this->get_applications($request->merge(['onlyWithRemarks' => true]))->getContent(), true)['applications']),
            ], 200);
        });
    }


    /**
     * Summary of lock_requirement
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
            AuditHelper::log($request->user()->id, 'Updated enrollment application status. ID#' . $this_training_status->id);

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've Updated enrollment application status. ID#" . $this_training_status->id], 201);
        });
    }

    /**
     * Summary of set_expired_status
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function set_expired_status(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $this_training = EnrolledCourse::findOrFail($request->documentId);
            $this_training->enrolled_course_status = EnrollmentEnum::DECLINED;
            $this_training->isExpired = $request->isExpired;
            $this_training->save();

            AuditHelper::log($request->user()->id, 'User has updated an enrolled course expiry status. ID# ' . $this_training->id);

            if (env('USE_EVENT')) {
                event(new BETraineeApplication(''));
            }

            return response()->json(['message' => "You've updated an enrolled course expiry status. ID# " . $this_training->id], 201);
        });
    }

    /**
     * Summary of get_schedules
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
     */
    public function create_or_update_schedule(CreateOrUpdateSchedule $request)
    {
        return TransactionUtil::transact($request, ['schedules_cache'], function () use ($request) {
            $this_schedule = $request->httpMethod === 'POST'
                ? new Training()
                : Training::findOrFail($request->documentId);

            $this_schedule->id = $request->httpMethod === 'POST'
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

            AuditHelper::log($request->user()->id, ($request->httpMethod === 'POST' ? 'Created' : 'Updated') . ' a schedule. ID#' . $this_schedule->id);

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === 'POST' ? 'created' : 'updated') . ' a schedule. ID# ' . $this_schedule->id], 200);
        });
    }

    /**
     * Summary of remove_schedule
     */
    public function remove_schedule(Request $request, int $schedule_id)
    {
        return TransactionUtil::transact(null, ['schedules_cache'], function () use ($request, $schedule_id) {
            $this_schedule = Training::withCount(['hasData'])->where('id', $schedule_id)->first();

            if ($this_schedule->has_data_count > 0) {
                return response()->json(['message' => "Can't remove module. It already has connected data."], 409);
            } else {
                $this_schedule->delete();
                AuditHelper::log($request->user()->id, "Removed a schedule. ID#$schedule_id");

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed schedule. ID#$schedule_id"], 200);
            }
        });
    }

    /**
     * Summary of get_modules
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
     */
    public function create_or_update_module(CreateOrUpdateModule $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $this_module = $request->httpMethod === 'POST'
                ? new CourseModule()
                : CourseModule::findOrFail($request->documentId);

            $this_module->module_type_id = $request->module;
            $this_module->name = $request->name;
            $this_module->acronym = $request->short_name;
            $this_module->compendium = $request->compendium;
            if ($request->status) {
                $this_module->status = $request->status;
            }
            $this_module->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === 'POST' ? 'Created' : 'Updated') . ' a module. ID#' . $this_module->id);

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === 'POST' ? 'created' : 'updated') . ' a module. ID#' . $this_module->id], 201);
        });
    }

    /**
     * Summary of remove_module
     */
    public function remove_module(Request $request, int $module_id)
    {
        return TransactionUtil::transact(null, [], function () use ($request, $module_id) {
            $this_module = CourseModule::withCount(['hasData'])->where('id', $module_id)->first();

            if ($this_module->has_data_count > 0) {
                return response()->json(['message' => "Can't remove module. It already has connected data."], 409);
            } else {
                $this_module->delete();
                AuditHelper::log($request->user()->id, "Removed a module. ID#$module_id");

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed a module. ID#$module_id"], 200);
            }
        });
    }

    /**
     * Summary of get_module_types
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
     */
    public function create_or_update_module_type(CreateOrUpdateModuleType $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;

            $check = CheckForDocumentExistence::exists(
                ModuleType::class,
                [
                    'name' => $request->name,
                    'category' => $request->category
                ],
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

            AuditHelper::log($request->user()->id, ($request->httpMethod === 'POST' ? 'Created' : 'Updated') . ' a module type. ID#' . $this_module_type->id);

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === 'POST' ? 'created' : 'updated') . ' a module type. ID#' . $this_module_type->id], 201);
        });
    }

    /**
     * Summary of remove_module_type
     */
    public function remove_module_type(Request $request, int $module_type_id)
    {
        return TransactionUtil::transact(null, [], function () use ($request, $module_type_id) {
            $this_module_type = ModuleType::withCount(['hasData'])->where('id', $module_type_id)->first();

            if ($this_module_type->has_data_count > 0) {
                return response()->json(['message' => "Can't remove module type. It already has connected data."], 409);
            } else {
                $this_module_type->delete();
                AuditHelper::log($request->user()->id, "Removed a module type. ID#$module_type_id");

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed module type. ID#$module_type_id"], 200);
            }
        });
    }

    /**
     * Summary of get_certificates
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
     */
    public function create_or_update_certificate(CreateOrUpdateCertificate $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $this_certificate = $request->httpMethod === 'POST'
                ? new MainCertificate()
                : MainCertificate::findOrFail($request->documentId);

            $this_certificate->course_module_id = $request->module;
            $this_certificate->name = $request->name;
            $this_certificate->header = $request->header;
            $this_certificate->header_1 = $request->header_1;
            $this_certificate->header_2 = $request->header_2;
            $this_certificate->body = $request->body;
            $this_certificate->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === 'POST' ? 'Created' : 'Updated') . ' a certificate. ID#' . $this_certificate->id);

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === 'POST' ? 'created' : 'updated') . ' a certificate. ID#' . $this_certificate->id], 201);
        });
    }

    /**
     * Summary of remove_certificate
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
                return response()->json(['message' => "Can't remove certificate. It already has connected data."], 409);
            } else {
                $this_certificate->delete();
                AuditHelper::log($request->user()->id, "Removed a certificate. ID#$certificate_id");

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed a certificate. ID#$certificate_id"], 200);
            }
        });
    }

    /**
     * Summary of get_requirements
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
     */
    public function create_or_update_requirement(CreateOrUpdateRequirement $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $this_requirement = $request->httpMethod === 'POST'
                ? new Requirement()
                : Requirement::findOrFail($request->documentId);

            $this_requirement->name = $request->name;
            $this_requirement->description = $request->description;
            $this_requirement->isRequired = $request->requiredStatus;
            $this_requirement->isBasic = $request->type;
            if ($request->status) {
                $this_requirement->status = $request->status;
            }

            if ($request->upload_reference) {
                if (!is_null($this_requirement->upload_reference) && file_exists(public_path('upload-reference/' . $this_requirement->upload_reference))) {
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

            AuditHelper::log($request->user()->id, ($request->httpMethod === 'POST' ? 'Created' : 'Updated') . ' a requirement. ID#' . $this_requirement->id);

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === 'POST' ? 'created' : 'updated') . ' a requirement. ID#' . $this_requirement->id], 201);
        });
    }

    /**
     * Summary of remove_requirement
     */
    public function remove_requirement(Request $request, int $requirement_id)
    {
        return TransactionUtil::transact(null, [], function () use ($request, $requirement_id) {
            $this_requirement = Requirement::withCount(['hasData', 'trainee_file'])->where('id', $requirement_id)->first();

            if ($this_requirement->has_data_count > 0 || $this_requirement->trainee_file_count > 0 || $this_requirement->for_modules_count > 0) {
                return response()->json(['message' => "Can't remove requirement. It already has connected data."], 409);
            } else {
                $this_requirement->delete();
                AuditHelper::log($request->user()->id, "Removed a requirement. ID#$requirement_id");

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed requirement. ID#$requirement_id"], 200);
            }
        });
    }

    /**
     * Summary of get_schools
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

            AuditHelper::log($request->user()->id, ($request->httpMethod === 'POST' ? 'Created' : 'Updated') . ' a school. ID#' . $this_school->id);

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === 'POST' ? 'Created' : 'Updated') . ' a school. ID#' . $this_school->id], 200);
        });
    }

    /**
     * Summary of remove_school
     */
    public function remove_school(Request $request, int $school_id)
    {
        return TransactionUtil::transact(null, [], function () use ($request, $school_id) {
            $this_school = MainSchool::withCount(['hasData'])->where('id', $school_id)->first();

            if ($this_school->has_data_count > 0) {
                return response()->json(['message' => "Can't remove school. It already has connected data."], 409);
            } else {
                $this_school->delete();

                AuditHelper::log($request->user()->id, "Removed a school. ID#$school_id");

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed a school. ID#$school_id"], 200);
            }
        });
    }

    /**
     * Summary of get_courses
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

            AuditHelper::log($request->user()->id, ($request->httpMethod === 'POST' ? 'Created' : 'Updated') . ' a course. ID#' . $this_course->id);

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === 'POST' ? 'created' : 'updated') . ' a course. ID#' . $this_course->id], 201);
        });
    }

    /**
     * Summary of remove_course
     */
    public function remove_course(Request $request, int $course_id)
    {
        return TransactionUtil::transact(null, [], function () use ($request, $course_id) {
            $this_course = MainCourse::withCount(['hasData'])->where('id', $course_id)->first();

            if ($this_course->has_data_count > 0) {
                return response()->json(['message' => "Can't remove course. It already has connected data."], 409);
            } else {
                $this_course->delete();
                AuditHelper::log($request->user()->id, "Removed a course. ID#$course_id");

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed course. ID#$course_id"], 200);
            }
        });
    }

    /**
     * Summary of get_vouchers
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

            AuditHelper::log($request->user()->id, ($request->httpMethod === 'POST' ? 'Created' : 'Updated') . ' a voucher. ID#' . $this_voucher->id);

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === 'POST' ? 'created' : 'updated') . ' a voucher. ID#' . $this_voucher->id], 201);
        });
    }

    /**
     * Summary of remove_voucher
     */
    public function remove_voucher(Request $request, int $voucher_id)
    {
        return TransactionUtil::transact(null, [], function () use ($request, $voucher_id) {
            $this_voucher = Voucher::where('id', $voucher_id)->first();

            if ($this_voucher->has_data_count > 0 && $this_voucher->has_data_count > 0) {
                return response()->json(['message' => "Can't remove voucher. It already has connected data."], 409);
            } else {
                $this_voucher->delete();
                AuditHelper::log($request->user()->id, "Removed a voucher. ID#$voucher_id");

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed voucher. ID#$voucher_id"], 200);
            }
        });
    }

    /**
     * Summary of get_sponsors
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

            AuditHelper::log($request->user()->id, ($request->httpMethod === 'POST' ? 'Created' : 'Updated') . ' a sponsor. ID#' . $this_sponsor->id);

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === 'POST' ? 'created' : 'updated') . ' a sponsor. ID#' . $this_sponsor->id], 201);
        });
    }

    /**
     * Summary of remove_sponsor
     */
    public function remove_sponsor(Request $request, int $sponsor_id)
    {
        return TransactionUtil::transact(null, [], function () use ($request, $sponsor_id) {
            $this_sponsor = Sponsor::where('id', $sponsor_id)->first();

            if (! $this_sponsor) {
                return response()->json(['message' => "Can't remove sponsor. It already has connected data."], 409);
            } else {
                $this_sponsor->delete();
                AuditHelper::log($request->user()->id, "Removed a sponsor. ID#$sponsor_id");

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed a sponsor. ID#$sponsor_id"], 200);
            }
        });
    }

    public function get_licenses(Request $request)
    {
        return TransactionUtil::transact(null, [], function () {
            $licenses = License::withCount(['hasData'])->get();
            return response()->json(['licenses' => $licenses], 200);
        });
    }

    /**
     * Summary of create_or_update_license
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

            AuditHelper::log($request->user()->id, ($request->httpMethod === 'POST' ? 'Created' : 'Updated') . ' a license. ID#' . $this_license->id);

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === 'POST' ? 'created' : 'updated') . ' a license. ID#' . $this_license->id], 201);
        });
    }

    /**
     * Summary of remove_license
     */
    public function remove_license(Request $request, int $license_id)
    {
        return TransactionUtil::transact(null, ['rank:license:all'], function () use ($request, $license_id) {
            $this_license = License::withCount(['hasData'])->where('id', $license_id)->first();

            if ($this_license->has_data_count > 0) {
                return response()->json(['message' => "Can't remove license. It already has connected data."], 409);
            } else {
                $this_license->delete();
                AuditHelper::log($request->user()->id, "Removed a license. ID#$license_id");

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed license. ID#$license_id"], 200);
            }
        });
    }

    /**
     * Summary of get_ranks
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

            AuditHelper::log($request->user()->id, ($request->httpMethod === 'POST' ? 'Created' : 'Updated') . ' a rank. ID#' . $this_rank->id);

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === 'POST' ? 'created' : 'updated') . ' a rank. ID# ' . $this_rank->id], 201);
        });
    }

    /**
     * Summary of remove_rank
     */
    public function remove_rank(Request $request, int $rank_id)
    {
        return TransactionUtil::transact(null, ['rank:license:all'], function () use ($request, $rank_id) {
            $this_rank = Rank::withCount(['hasData'])->where('id', $rank_id)->first();

            if ($this_rank->has_data_count > 0) {
                return response()->json(['message' => "Can't remove rank. It already has connected data."], 409);
            } else {
                $this_rank->delete();

                AuditHelper::log($request->user()->id, "Removed a rank. ID#$rank_id");

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed rank. ID#$rank_id"], 200);
            }
        });
    }

    /**
     * Summary of get_facilitators
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

            AuditHelper::log($request->user()->id, ($request->httpMethod === 'POST' ? 'Created' : 'Updated') . ' a facilitator. ID#' . $this_facilitator->id);

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === 'POST' ? 'created' : 'updated') . ' a facilitator. ID# ' . $this_facilitator->id], 201);
        });
    }

    /**
     * Summary of remove_facilitator
     */
    public function remove_facilitator(Request $request, int $facilitator_id)
    {
        return TransactionUtil::transact(null, [], function () use ($request, $facilitator_id) {
            $this_facilitator = TrainingFacilitator::withCount(['hasData'])->where('id', $facilitator_id)->first();

            if ($this_facilitator->has_data_count > 0) {
                return response()->json(['message' => "Can't remove facilitator. It already has connected data."], 409);
            } else {
                $this_facilitator->delete();
                AuditHelper::log($request->user()->id, "Removed a facilitator. ID#$facilitator_id");

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed facilitator. ID#$facilitator_id"], 200);
            }
        });
    }

    /**
     * Summary of get_course_module_fees
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

            AuditHelper::log($request->user()->id, ($request->httpMethod === 'POST' ? 'Created' : 'Updated') . ' a training fee. ID#' . $this_course_fee->id);

            if (env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === 'POST' ? 'created' : 'updated') . ' a training fee. ID# ' . $this_course_fee->id], 201);
        });
    }

    /**
     * Summary of remove_course_fee
     */
    public function remove_course_fee(Request $request, int $course_fee_id)
    {
        return TransactionUtil::transact(null, [], function () use ($request, $course_fee_id) {
            $this_course_fee = CourseModuleFee::where('id', $course_fee_id)->first();

            if ($this_course_fee->has_data_count > 0) {
                return response()->json(['message' => "Can't remove training fee. It already has connected data."], 409);
            } else {
                $this_course_fee->delete();

                AuditHelper::log($request->user()->id, "Removed a training fee. ID#$course_fee_id");

                if (env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed training fee. ID#$course_fee_id"], 200);
            }
        });
    }
}

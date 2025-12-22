<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Events\{
    BETraineeApplication,
    BEAuditTrail,
    BEEnrollment
};
use App\Http\Requests\Admin\Training\{
    CreateOrUpdateSchedule,
    CreateOrUpdateModule,
    CreateOrUpdateModuleType,
    CreateOrUpdateTrainingFee,
    CreateOrUpdateFeeCategory,
    CreateOrUpdateCertificate,
    CreateOrUpdateRequirement,
    CreateOrUpdateSchool,
    CreateOrUpdateCourse,
    CreateOrUpdateVoucher,
    CreateOrUpdateSponsor,
    CreateOrUpdateLicense,
    CreateOrUpdateRank
};
use App\Utils\{
    AuditHelper,
    TransactionUtil
};
use App\Models\{
    EnrollmentInvoice,
    TraineeRequirement,
    EnrolledCourse,
    TrainingRegFile,
    AuditTrail,
    MainCertificate,
    CourseModule,
    Training,
    TrainingFee,
    ModuleType,
    RequirementSpecificModule,
    Requirement,
    TrainingFeeCategory,
    MainCourse,
    MainSchool,
    Voucher,
    License,
    Rank,
    Sponsor,
};

class EnrollmentCtrl extends Controller
{
    public function get_applications (Request $request) {
        $applications = EnrolledCourse::query();

        if($request->applicationStatus) $applications->whereIn('enrolled_course_status', $request->applicationStatus);
        if($request->isExpired) $applications->where('isExpired', $request->isExpired);

        $applications = $applications->get()
            ->map(function($self) {
                return [
                    'training' => [
                        'main' => [
                            'info' => $self->toArray(),
                            'name' => [
                                'module' => $self->training->module,
                                'moduleType' => $self->training->moduleType
                            ]
                        ],
                        'schedule' => $self->training_schedule
                    ],
                    'trainee_info' => [
                        'account' => $self->trainee->additional_trainee_info->user,
                        'general_info' => $self->trainee->additional_trainee_info->general_info,
                        'contact' => $self->trainee->additional_trainee_info->contact,
                        'educational_attainment' => [
                            'main' => $self->trainee->additional_trainee_info->educational_attainment->first(),
                            'school' => $self->trainee->additional_trainee_info->educational_attainment->main_school,
                            'course' => $self->trainee->additional_trainee_info->educational_attainment->main_course,
                        ],
                        'shipboard' => $self->trainee->additional_trainee_info->latest_shipboard_attainment,
                        'basic_requirements' => (function() use ($self) {
                            $allRequirements = Requirement::where('isBasic', 'YES')->get();
                            $traineeBasicReqs = $self->trainee->additional_trainee_info->basic_requirement->keyBy('requirement_id');

                            return $allRequirements->map(function($req) use ($traineeBasicReqs) {
                                $tr = $traineeBasicReqs->get($req->id);

                                return [
                                    'id' => $tr->id ?? null,
                                    'locked' => $tr->locked ?? null,
                                    'requirement_info' => $req,
                                    'remarks' => $tr->remarks ?? null,
                                    'uploaded_file' => $tr->filename ?? null
                                ];
                            })->toArray();
                        })()
                    ],
                    'requirements' => (function() use ($self) {
                        $allRequirements = Requirement::get();
                        $traineeBasicReqs = $self->trainee->additional_trainee_info->basic_requirement->keyBy('requirement_id');
                        $traineeCourseReqs = $self->trainee_requirement->keyBy('requirement_id');

                        return $allRequirements->map(function($req) use ($traineeBasicReqs, $traineeCourseReqs) {
                            $isBasic = $req->isBasic === "YES";
                            $tr = $isBasic ? $traineeBasicReqs->get($req->id) : $traineeCourseReqs->get($req->id);

                            return [
                                'id' => $tr->id ?? null,
                                'locked' => $tr->locked ?? null,
                                'requirement_info' => $req,
                                'remarks' => $tr->remarks ?? null,
                                'uploaded_file' => $tr->filename ?? null
                            ];
                        })->toArray();
                    })()
                ];
            });

        return response()->json(['applications' => $applications], 200);
    }

    public function requirement_remark (Request $request) {
        $validations = [
            'remark' => 'nullable|string',
            'isBasic' => 'nullable|string'
        ];

        $validator = \Validator::make($request->all(), $validations);

        if($validator->fails()) {
            $errors = $validator->messages()->all();
            return response()->json(['message' => implode(', ', $errors)], 422);
        } else {
            try {
                DB::beginTransaction();

                $this_remark = $request->isBasic === "YES" ? TrainingRegFile::find($request->documentId) : TraineeRequirement::find($request->documentId);
                $this_remark->remarks = $request->remark ?? null;
                $this_remark->locked = "N";
                $this_remark->save();

                $new_log = new AuditTrail;
                $new_log->user_id = $request->user()->id;
                $new_log->actions = "User has " . ($request->httpMethod == "POST" ? 'created' : 'updated') . " a remark. ID# " . $this_remark->id;
                $new_log->save();

                if(env('USE_EVENT')) {
                    event(
                        new BETraineeApplication(''),
                        new BEAuditTrail('')
                    );
                }

                DB::commit();
                return response()->json(['message' => "You've " . ($request->httpMethod == "POST" ? 'created' : 'updated') . " a remark. ID# " . $this_remark->id], 201);
            } catch (\Exception $e) {
                DB::rollback();
                return response()->json(['message' => $e->getMessage()], 500);
            }
        }
    }

    public function lock_requirement (Request $request) {
        $validations = [
            'locked' => 'required|string',
            'documentId' => 'required|numeric',
            'isBasic' => 'required|string'
        ];

        $validator = \Validator::make($request->all(), $validations);

        if($validator->fails()) {
            $errors = $validator->messages()->all();
            return response()->json(['message' => implode(', ', $errors)], 422);
        } else {
            try {
                DB::beginTransaction();

                $this_requirement = $request->isBasic === 'YES'
                    ? TrainingRegFile::find($request->documentId)
                    : TraineeRequirement::find($request->documentId);

                $this_requirement->locked = $request->locked === 'Y' ? 'N' : 'Y';
                $this_requirement->save();

                if(env('USE_EVENT')) {
                    event(new BETraineeApplication(''));
                }

                DB::commit();
            } catch (\Exception $e) {
                DB::rollback();
                return response()->json(['message' => $e->getMessage()], 500);
            }
        }
    }

    public function set_training_status (Request $request) {
        $validations = [
            'status' => 'required|string'
        ];

        $validator = \Validator::make($request->all(), $validations);

        if($validator->fails()) {
            $errors = $validator->messages()->all();
            return response()->json(['message' => implode(', ', $errors)], 422);
        } else {
            try {
                DB::beginTransaction();

                $this_training_status = EnrolledCourse::find($request->documentId);
                $this_training_status->enrolled_course_status = $request->status;
                $this_training_status->save();

                if($request->status === 'FOR-PAYMENT') {
                    $premade_record = new EnrollmentInvoice;
                    $premade_record->enrolled_course_id = $request->documentId;
                    $premade_record->save();
                }

                $new_log = new AuditTrail;
                $new_log->user_id = $request->user()->id;
                $new_log->actions = "User has updated an enrolled course status. ID# " . $this_training_status->id;
                $new_log->save();

                if(env('USE_EVENT')) {
                    event(
                        new BETraineeApplication(''),
                        new BEAuditTrail('')
                    );
                }

                DB::commit();
                return response()->json(['message' => "You've updated an enrolled course status. ID# " . $this_training_status->id], 201);
            } catch (\Exception $e) {
                DB::rollback();
                return response()->json(['message' => $e->getMessage()], 500);
            }
        }
    }

    public function set_expired_status (Request $request) {
        $validations = [
            'isExpired' => 'required|string'
        ];

        $validator = \Validator::make($request->all(), $validations);

        if($validator->fails()) {
            $errors = $validator->messages()->all();
            return response()->json(['message' => implode(', ', $errors)], 422);
        } else {
            try {
                DB::beginTransaction();

                $this_training = EnrolledCourse::find($request->documentId);
                $this_training->enrolled_course_status = "DECLINED";
                $this_training->isExpired = $request->isExpired;
                $this_training->save();

                $new_log = new AuditTrail;
                $new_log->user_id = $request->user()->id;
                $new_log->actions = "User has updated an enrolled course expiry status. ID# " . $this_training->id;
                $new_log->save();

                if(env('USE_EVENT')) {
                    event(new BETraineeApplication(''));
                }

                DB::commit();
                return response()->json(['message' => "You've updated an enrolled course expiry status. ID# " . $this_training->id], 201);
            } catch (\Exception $e) {
                DB::rollback();
                return response()->json(['message' => $e->getMessage()], 500);
            }
        }
    }

    public function remove_training_request (Request $request, int $training_request_id) {
        try {
            DB::beginTransaction();

            $training_request = EnrolledCourse::find($training_request_id);
            $training_request_files = TraineeRequirement::where('enrolled_course_id', $training_request_id)->get();
            foreach($training_request_files as $trf){
                if(file_exists(public_path('training_requirement_files/' . $trf->filename))){
                    unlink(public_path('training_requirement_files/' . $trf->filename));
                }
            }

            $training_request->delete();

            $new_log = new AuditTrail;
            $new_log->user_id = $request->user()->id;
            $new_log->actions = "User has removed training request. ID# $training_request_id";
            $new_log->save();

            if(env('USE_EVENT')) {
                event(new BETraineeApplication(''));
            }

            DB::commit();
            return response()->json(['message' => "You've removed training request. ID# $training_request_id"], 200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function get_schedules (Request $request) {
        return TransactionUtil::transact(null, function() use ($request) {
            $schedules = Training::withCount(['hasData'])->get()->map(function($self) {
                return [
                    'main' => $self->toArray(),
                    'module' => [
                        'main' => $self->module->toArray(),
                        'type' => $self->module->moduleType->toArray()
                    ]
                ];
            })->values();

            return response()->json(['schedules' => $schedules], 200);
        });
    }

    public function create_or_update_schedule (CreateOrUpdateSchedule $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_schedule = $request->httpMethod === "POST"
                ? new Training
                : Training::find($request->documentId);

            $this_schedule->id = $request->httpMethod === "POST"
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
            if($request->status) $this_schedule->status = $request->status;
            $this_schedule->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a schedule. ID#" . $this_schedule->id);

            if(env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail('')
                );
            }

            // Cache::forget('schedules_cache');
            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a schedule. ID# " . $this_schedule->id], 200);
        });
    }

    public function remove_schedule (Request $request, int $schedule_id) {
        return TransactionUtil::transact(null, function() use ($request, $schedule_id) {
            $this_schedule = Training::withCount(['hasData'])->where('id', $schedule_id)->first();

            if($this_schedule->has_data_count > 0) {
                return response()->json(['message' => "Can't remove module. It already has connected data."], 200);
            } else {
                $this_schedule->delete();
                AuditHelper::log($request->user()->id, "Removed a schedule. ID#$schedule_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                // Cache::forget('schedules_cache');
                return response()->json(['message' => "You've removed schedule. ID#$schedule_id"], 200);
            }
        });
    }

    public function get_modules (Request $request) {
        return TransactionUtil::transact(null, function() {
            $modules = CourseModule::withCount(['hasData'])->with('moduleType')->get();
            return response()->json(['modules' => $modules], 200);
        });
    }

    public function create_or_update_module (CreateOrUpdateModule $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_module = $request->httpMethod === "POST"
                ? new CourseModule
                : CourseModule::find($request->documentId);

            $this_module->module_type_id = $request->module;
            $this_module->name = $request->name;
            $this_module->acronym = $request->short_name;
            $this_module->compendium = $request->compendium;
            if($request->status) $this_module->status = $request->status;
            $this_module->save();

            AuditHelper::log($request->user()->id,($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a module. ID#" . $this_module->id);

            if(env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a module. ID#" . $this_module->id], 201);
        });
    }

    public function remove_module (Request $request, int $module_id) {
        return TransactionUtil::transact(null, function() use ($request, $module_id) {
            $this_module = CourseModule::withCount(['hasData'])->where('id', $module_id)->first();

            if($this_module->has_data_count > 0) {
                return response()->json(['message' => "Can't remove module. It already has connected data."], 200);
            } else {
                $this_module->delete();
                AuditHelper::log($request->user()->id, "Removed a module. ID#$module_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed a module. ID#$module_id"], 200);
            }
        });
    }

    public function get_module_types (Request $request) {
        return TransactionUtil::transact(null, function()  {
            $moduleTypes = ModuleType::withCount(['hasData'])->get();
            return response()->json(['moduleTypes' => $moduleTypes], 200);
        });
    }

    public function create_or_update_module_type (CreateOrUpdateModuleType $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_module_type = $request->httpMethod === "POST"
                ? new ModuleType
                : ModuleType::find($request->documentId);

            $this_module_type->name = $request->name;
            if($request->status) $this_module_type->status = $request->status;
            $this_module_type->save();

            AuditHelper::log($request->user()->id,($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a module type. ID#" . $this_module_type->id);

            if(env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a module type. ID#" . $this_module_type->id], 201);
        });
    }

    public function remove_module_type (Request $request, int $module_type_id) {
        return TransactionUtil::transact(null, function() use ($request, $module_type_id) {
            $this_module_type = ModuleType::withCount(['hasData'])->where('id', $module_type_id)->first();

            if($this_module_type->has_data_count > 0) {
                return response()->json(['message' => "Can't remove module type. It already has connected data."], 200);
            } else {
                $this_module_type->delete();
                AuditHelper::log($request->user()->id, "Removed a module type. ID#$module_type_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed module type. ID#$module_type_id"], 200);
            }
        });
    }

    public function get_training_fees (Request $request) {
        return TransactionUtil::transact(null, function()  {
            $training_fees = TrainingFee::withCount(['module' => function($query) {
                return $query->whereHas('schedules', function ($schedulesQuery) {
                    return $schedulesQuery->whereHas('hasData');
                });
            }])->with('category', 'module')->get();

            return response()->json(['training_fees' => $training_fees], 200);
        });
    }

    public function get_training_fees_predata (Request $request) {
        return TransactionUtil::transact(null, function() use ($request) {
            return response()->json([
                'categories' => json_decode($this->get_training_fees_category($request)->getContent(), true)['categories'],
                'modules' => json_decode($this->get_modules($request)->getContent(), true)['modules'],
            ], 200);
        });
    }

    public function create_or_update_training_fee (CreateOrUpdateTrainingFee $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_training_fee = $request->httpMethod === "POST"
                ? new TrainingFee
                : TrainingFee::find($request->documentId);

            $this_training_fee->course_module_id = $request->module;
            $this_training_fee->training_fee_category_id = $request->category;
            $this_training_fee->name = $request->name;
            $this_training_fee->amount = $request->amount;
            if($request->status) $this_training_fee->status = $request->status;
            $this_training_fee->save();

            AuditHelper::log($request->user()->id,($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a training fee. ID#" . $this_training_fee->id);

            if(env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a training fee. ID#" . $this_training_fee->id], 201);
        });
    }

    public function remove_training_fee (Request $request, int $fee_id) {
        return TransactionUtil::transact(null, function() use ($request, $fee_id) {
            $this_fee = TrainingFee::withCount(['module' => function($query) {
                return $query->whereHas('schedules', function ($schedulesQuery) {
                    return $schedulesQuery->whereHas('hasData');
                });
            }])->where('id', $fee_id)->first();

            if($this_fee->module_count > 0) {
                return response()->json(['message' => "Can't remove training fee. It already has connected data."], 200);
            } else {
                $this_fee->delete();
                AuditHelper::log($request->user()->id, "Removed a training fee. ID#$fee_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }
                return response()->json(['message' => "You've removed a training fee. ID#$fee_id"], 200);
            }
        });
    }

    public function get_training_fees_category (Request $request) {
        return TransactionUtil::transact(null, function()  {
            $categories = TrainingFeeCategory::withCount(['hasData'])->get();
            return response()->json(['categories' => $categories], 200);
        });
    }

    public function create_or_update_training_fee_category (CreateOrUpdateFeeCategory $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $fee_category = $request->httpMethod === "POST"
                ? new TrainingFeeCategory
                : TrainingFeeCategory::find($request->documentId);

            $fee_category->name = $request->name;
            $fee_category->save();

            AuditHelper::log($request->user()->id,($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a fee category. ID#" . $fee_category->id);

            if(env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a fee category. ID#" . $fee_category->id], 201);
        });
    }

    public function remove_training_fee_category (Request $request, int $fee_category_id) {
        return TransactionUtil::transact(null, function() use ($request, $fee_category_id) {
            $this_fee = TrainingFeeCategory::withCount(['hasData'])->where('id', $fee_category_id)->first();

            if($this_fee->has_data_count > 0) {
                return response()->json(['message' => "Can't remove fee category. It already has connected data."], 200);
            } else {
                $this_fee->delete();
                AuditHelper::log($request->user()->id, "Removed a fee category. ID#$fee_category_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }
                return response()->json(['message' => "You've removed a fee category. ID#$fee_category_id"], 200);
            }
        });
    }

    public function get_certificates (Request $request) {
        return TransactionUtil::transact(null, function() use ($request) {
            $certificates = MainCertificate::withCount(['module' => function($query) {
                return $query->whereHas('schedules', function ($schedulesQuery) {
                    return $schedulesQuery->whereHas('hasData');
                });
            }])->with('module')->get();

            return response()->json(['certificates' => $certificates], 200);
        });
    }

    public function create_or_update_certificate (CreateOrUpdateCertificate $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_certificate = $request->httpMethod === "POST"
                ? new MainCertificate
                : MainCertificate::find($request->documentId);

            $this_certificate->course_module_id = $request->module;
            $this_certificate->name = $request->name;
            $this_certificate->header = $request->header;
            $this_certificate->header_1 = $request->header_1;
            $this_certificate->header_2 = $request->header_2;
            $this_certificate->body = $request->body;
            $this_certificate->save();

            AuditHelper::log($request->user()->id,($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a certificate. ID#" . $this_certificate->id);

            if(env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a certificate. ID#" . $this_certificate->id], 201);
        });
    }

    public function remove_certificate (Request $request, int $certificate_id) {
        return TransactionUtil::transact(null, function() use ($request, $certificate_id) {
            $this_certificate = MainCertificate::withCount(['module' => function($query) {
                return $query->whereHas('schedules', function ($schedulesQuery) {
                    return $schedulesQuery->whereHas('hasData');
                });
            }])->where('id', $certificate_id)->first();

            if($this_certificate->module_count > 0) {
                return response()->json(['message' => "Can't remove certificate. It already has connected data."], 200);
            } else {
                $this_certificate->delete();
                AuditHelper::log($request->user()->id, "Removed a certificate. ID#$certificate_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed a certificate. ID#$certificate_id"], 200);
            }
        });
    }

    public function get_requirements (Request $request) {
        return TransactionUtil::transact(null, function() use ($request) {
            $requirements = Requirement::withCount(['hasData', 'trainee_file'])->with('forModules')->get();
            return response()->json(['requirements' => $requirements], 200);
        });
    }

    public function create_or_update_requirement (CreateOrUpdateRequirement $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_requirement = $request->httpMethod === "POST"
                ? new Requirement
                : Requirement::find($request->documentId);

            $this_requirement->name = $request->name;
            $this_requirement->description = $request->description;
            $this_requirement->isRequired = $request->requiredStatus;
            $this_requirement->isBasic = $request->type;
            if($request->status) $this_requirement->status = $request->status;
            $this_requirement->save();

            if($request->module) {
                foreach($request->module as $module){
                    $checkExistence = RequirementSpecificModule::where([
                        'requirement_id' => $this_requirement->id,
                        'course_module_id' => $module
                    ])->count();

                    if($checkExistence <= 0) {
                        $specific_module = new RequirementSpecificModule;
                        $specific_module->requirement_id = $this_requirement->id;
                        $specific_module->course_module_id = $module;
                        $specific_module->save();
                    }
                }
            }

            AuditHelper::log($request->user()->id,($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a requirement. ID#" . $this_requirement->id);

            if(env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a requirement. ID#" . $this_requirement->id], 201);
        });
    }

    public function remove_requirement (Request $request, int $requirement_id) {
        return TransactionUtil::transact(null, function() use ($request, $requirement_id) {
            $this_requirement = Requirement::withCount(['hasData', 'forModules'])->where('id', $requirement_id)->first();

            if($this_requirement->has_data_count > 0 || $this_requirement->for_modules_count > 0) {
                return response()->json(['message' => "Can't remove requirement. It already has connected data."], 200);
            } else {
                $this_requirement->delete();
                AuditHelper::log($request->user()->id, "Removed a requirement. ID#$requirement_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed requirement. ID#$requirement_id"], 200);
            }
        });
    }

    public function get_schools (Request $request) {
        return TransactionUtil::transact(null, function() {
            $schools = MainSchool::withCount(['hasData'])->get();
            return response()->json(['schools' => $schools], 200);
        });
    }

    public function create_or_update_school (CreateOrUpdateSchool $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_school = $request->httpMethod === "POST"
                ? new MainSchool
                : MainSchool::find($request->documentId);

            $this_school->school_name = $request->name;
            $this_school->school_address = $request->address;
            if($request->status) $this_school->school_status = $request->status;

            $this_school->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a school. ID#" . $this_school->id);

            if(env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail(''),
                );
            }
            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a school. ID#" . $this_school->id], 200);
        });
    }

    public function remove_school (Request $request, int $school_id) {
        return TransactionUtil::transact(null, function() use ($request, $school_id) {
            $this_school = MainSchool::withCount(['hasData'])->where('id', $school_id)->first();

            if($this_school->has_data_count > 0) {
                return response()->json(['message' => "Can't remove school. It already has connected data."], 409);
            } else {
                $this_school->delete();

                AuditHelper::log($request->user()->id, "Removed a school. ID#$school_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed a school. ID#$school_id"], 200);
            }
        });
    }

    public function get_courses (Request $request) {
        return TransactionUtil::transact(null, function() {
            $courses = MainCourse::withCount(['hasData'])->get();
            return response()->json(['courses' => $courses], 200);
        });
    }

    public function create_or_update_course (CreateOrUpdateCourse $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_course = $request->httpMethod === "POST"
                ? new MainCourse
                : MainCourse::find($request->documentId);

            $this_course->course_name = $request->name;
            if($request->status) $this_course->course_status = $request->status;
            $this_course->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a course. ID#" . $this_course->id);

            if(env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a course. ID#" . $this_course->id], 201);
        });
    }

    public function remove_course (Request $request, int $course_id) {
        return TransactionUtil::transact(null, function() use ($request, $course_id) {
            $this_course = MainCourse::withCount(['hasData'])->where('id', $course_id)->first();

            if($this_course->has_data_count > 0) {
                return response()->json(['message' => "Can't remove course. It already has connected data."], 409);
            } else {
                $this_course->delete();
                AuditHelper::log($request->user()->id, "Removed a course. ID#$course_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed course. ID#$course_id"], 200);
            }
        });
    }

    public function get_vouchers (Request $request) {
        return TransactionUtil::transact(null, function() {
            $vouchers = Voucher::all();
            return response()->json(['vouchers' => $vouchers], 200);
        });
    }

    public function create_or_update_voucher (CreateOrUpdateVoucher $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_voucher = $request->httpMethod === "POST"
                ? new Voucher
                : Voucher::find($request->documentId);

            $this_voucher->name = $request->name;
            $this_voucher->code = $request->code;
            if($request->status) $this_voucher->status = $request->status;
            $this_voucher->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a voucher. ID#" . $this_voucher->id);

            if(env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a voucher. ID#" . $this_voucher->id], 201);
        });
    }

    public function remove_voucher (Request $request, int $voucher_id) {
        return TransactionUtil::transact(null, function() use ($request, $voucher_id) {
            $this_voucher = Voucher::where('id', $voucher_id)->first();

            if($this_voucher->has_data_count > 0 && $this_voucher->has_data_count > 0) {
                return response()->json(['message' => "Can't remove voucher. It already has connected data."], 409);
            } else {
                $this_voucher->delete();

                AuditHelper::log($request->user()->id, "Removed a voucher. ID#$voucher_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed voucher. ID#$voucher_id"], 200);
            }
        });
    }

    public function get_sponsors (Request $request) {
        return TransactionUtil::transact(null, function() {
            $sponsors = Sponsor::all();
            return response()->json(['sponsors' => $sponsors], 200);
        });
    }

    public function create_or_update_sponsor (CreateOrUpdateSponsor $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_sponsor = $request->httpMethod === "POST"
                ? new Sponsor
                : Sponsor::find($request->documentId);

            $this_sponsor->name = $request->name;
            $this_sponsor->short_name = $request->short_name;
            if($request->status) $this_sponsor->status = $request->status;
            $this_sponsor->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a sponsor. ID#" . $this_sponsor->id);

            if(env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a sponsor. ID#" . $this_sponsor->id], 201);
        });
    }

    public function remove_sponsor (Request $request, int $sponsor_id) {
        return TransactionUtil::transact(null, function() use ($request, $sponsor_id) {
            $this_sponsor = Sponsor::where('id', $sponsor_id)->first();

            if(!$this_sponsor) {
                return response()->json(['message' => "Can't remove sponsor. It already has connected data."], 409);
            } else {
                $this_sponsor->delete();
                AuditHelper::log($request->user()->id, "Removed a sponsor. ID#$sponsor_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed a sponsor. ID#$sponsor_id"], 200);
            }
        });
    }

     public function get_licenses (Request $request) {
        return TransactionUtil::transact(null, function() {
            $licenses = License::withCount(['hasData'])->get();
            return response()->json(['licenses' => $licenses], 200);
        });
    }

    public function create_or_update_license (CreateOrUpdateLicense $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_license = $request->httpMethod === "POST"
                ? new License
                : License::find($request->documentId);

            $this_license->short_name = $request->name;
            $this_license->license = $request->license;
            $this_license->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a license. ID#" . $this_license->id);

            if(env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a license. ID#" . $this_license->id], 201);
        });
    }

    public function remove_license (Request $request, int $license_id) {
        return TransactionUtil::transact(null, function() use ($request, $license_id) {
            $this_license = License::withCount(['hasData'])->where('id', $license_id)->first();

            if($this_license->has_data_count > 0) {
                return response()->json(['message' => "Can't remove license. It already has connected data."], 409);
            } else {
                $this_license->delete();
                AuditHelper::log($request->user()->id, "Removed a license. ID#$license_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed license. ID#$license_id"], 200);
            }
        });
    }

    public function get_ranks (Request $request) {
        return TransactionUtil::transact(null, function() {
            $ranks = Rank::withCount(['hasData'])->get();
            return response()->json(['ranks' => $ranks], 200);
        });
    }

    public function create_or_update_rank (CreateOrUpdateRank $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_rank = $request->httpMethod === "POST"
                ? new Rank
                : Rank::find($request->documentId);

            $this_rank->short_name = $request->short_name;
            $this_rank->name = $request->name;
            $this_rank->type = $request->type;
            $this_rank->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a rank. ID#" . $this_rank->id);

            if(env('USE_EVENT')) {
                event(
                    new BEEnrollment(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a rank. ID# " . $this_rank->id], 201);
        });
    }

    public function remove_rank (Request $request, int $rank_id) {
        return TransactionUtil::transact(null, function() use ($request, $rank_id) {
            $this_rank = Rank::withCount(['hasData'])->where('id', $rank_id)->first();

            if($this_rank->has_data_count > 0) {
                return response()->json(['message' => "Can't remove rank. It already has connected data."], 409);
            } else {
                $this_rank->delete();

                AuditHelper::log($request->user()->id, "Removed a rank. ID#$rank_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEEnrollment(''),
                        new BEAuditTrail('')
                    );
                }

                DB::commit();
                return response()->json(['message' => "You've removed rank. ID#$rank_id"], 200);
            }
        });
    }
}

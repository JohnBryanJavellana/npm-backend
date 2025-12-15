<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use App\Utils\{
    AuditHelper,
    TransactionUtil
};
use App\Http\Requests\Admin\Training\{
    CreateOrUpdateSchedule,
    CreateOrUpdateModule,
    CreateOrUpdateModuleType,
    CreateOrUpdateTrainingFee,
    CreateOrUpdateFeeCategory,
    CreateOrUpdateCertificate,
    CreateOrUpdateRequirement
};
use App\Events\{
    BETraining,
    BEAuditTrail
};
use App\Models\{
    MainCertificate,
    CourseModule,
    Training,
    TrainingFee,
    ModuleType,
    RequirementSpecificModule,
    Requirement,
    TrainingFeeCategory
};

class TrainingCtrl extends Controller
{
    public function schedules (Request $request) {
        return TransactionUtil::transact(null, function() use ($request) {
            $ttl = now()->addMinutes(env('CACHE_DURATION'));
            $schedules = Cache::remember('schedules_cache', $ttl, function () {
                return Training::withCount(['hasData'])->get()->map(function($self) {
                    return [
                        'main' => $self->toArray(),
                        'module' => [
                            'main' => $self->module->toArray(),
                            'type' => $self->module->moduleType->toArray()
                        ]
                    ];
                })->values();
            });

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
                    new BETraining(''),
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
                        new BETraining(''),
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
            $ttl = now()->addMinutes(env('CACHE_DURATION'));
            $modules = Cache::remember('module_cache', $ttl, function () {
                return CourseModule::withCount(['hasData'])->with('moduleType')->get();
            });

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
                    new BETraining(''),
                    new BEAuditTrail('')
                );
            }

            // Cache::forget('module_cache');
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
                        new BETraining(''),
                        new BEAuditTrail('')
                    );
                }

                // Cache::forget('module_cache');
                return response()->json(['message' => "You've removed a module. ID#$module_id"], 200);
            }
        });
    }

    public function get_module_types (Request $request) {
        return TransactionUtil::transact(null, function()  {
            $ttl = now()->addMinutes(env('CACHE_DURATION'));
            $moduleTypes = Cache::remember('module_type_cache', $ttl, function () {
                return ModuleType::withCount(['hasData'])->get();
            });

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
                    new BETraining(''),
                    new BEAuditTrail('')
                );
            }

            // Cache::forget('module_type_cache');
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
                        new BETraining(''),
                        new BEAuditTrail('')
                    );
                }

                // Cache::forget('module_type_cache');
                return response()->json(['message' => "You've removed module type. ID#$module_type_id"], 200);
            }
        });
    }

    public function get_training_fees (Request $request) {
        return TransactionUtil::transact(null, function()  {
            $ttl = now()->addMinutes(env('CACHE_DURATION'));
            $training_fees = Cache::remember('training_fee_cache', $ttl, function () {
                return TrainingFee::withCount(['module' => function($query) {
                    return $query->whereHas('schedules', function ($schedulesQuery) {
                        return $schedulesQuery->whereHas('hasData');
                    });
                }])->with('category', 'module')->get();
            });

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
                    new BETraining(''),
                    new BEAuditTrail('')
                );
            }

            // Cache::forget('training_fee_cache');
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
                        new BETraining(''),
                        new BEAuditTrail('')
                    );
                }

                // Cache::forget('training_fee_cache');
                return response()->json(['message' => "You've removed a training fee. ID#$fee_id"], 200);
            }
        });
    }

    public function get_training_fees_category (Request $request) {
        return TransactionUtil::transact(null, function()  {
            $ttl = now()->addMinutes(env('CACHE_DURATION'));
            $categories = Cache::remember('fee_category_cache', $ttl, function () {
                return TrainingFeeCategory::withCount(['hasData'])->get();
            });

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
                    new BETraining(''),
                    new BEAuditTrail('')
                );
            }

            // Cache::forget('fee_category_cache');
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
                        new BETraining(''),
                        new BEAuditTrail('')
                    );
                }

                // Cache::forget('fee_category_cache');
                return response()->json(['message' => "You've removed a fee category. ID#$fee_category_id"], 200);
            }
        });
    }

    public function get_certificates (Request $request) {
        return TransactionUtil::transact(null, function() use ($request) {
            $ttl = now()->addMinutes(env('CACHE_DURATION'));
            $certificates = Cache::remember('certificate_cache', $ttl, function () {
                return MainCertificate::withCount(['module' => function($query) {
                    return $query->whereHas('schedules', function ($schedulesQuery) {
                        return $schedulesQuery->whereHas('hasData');
                    });
                }])->with('module')->get();
            });

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
                    new BETraining(''),
                    new BEAuditTrail('')
                );
            }

            // Cache::forget('certificate_cache');
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
                        new BETraining(''),
                        new BEAuditTrail('')
                    );
                }

                // Cache::forget('certificate_cache');
                return response()->json(['message' => "You've removed a certificate. ID#$certificate_id"], 200);
            }
        });
    }

    public function get_requirements (Request $request) {
        return TransactionUtil::transact(null, function() use ($request) {
            $ttl = now()->addMinutes(env('CACHE_DURATION'));
            $requirements = Cache::remember('requirements_cache', $ttl, function () {
                return Requirement::withCount(['hasData', 'trainee_file'])->with('forModules')->get();
            });

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
                    new BETraining(''),
                    new BEAuditTrail('')
                );
            }

            // Cache::forget('requirements_cache');
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
                        new BETraining(''),
                        new BEAuditTrail('')
                    );
                }

                // Cache::forget('requirements_cache');
                return response()->json(['message' => "You've removed requirement. ID#$requirement_id"], 200);
            }
        });
    }
}

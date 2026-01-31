<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use App\Enums\RequestStatus;
use App\Events\BEAccount;
use App\Events\BEAuditTrail;
use App\Events\BENotification;
use App\Events\BETraineeApplication;
use App\Http\Controllers\Controller;
use App\Http\Requests\EnrollmentRequest;
use App\Http\Requests\Trainee\Enrollment\CancelEnrollmentRequest;
use App\Http\Requests\Trainee\Enrollment\getModuleRequest;
use App\Http\Requests\Trainee\Enrollment\ViewApplicationRequest;
use App\Http\Requests\Trainee\Enrollment\ViewTraineeRecRequest;
use App\Http\Resources\Trainee\Enrollment\ViewTraineeRecResource;
use Illuminate\Http\Request;
use App\Utils\{AuditHelper, GenerateUniqueFilename, SaveFile, Notifications};
use App\Http\Resources\{TrainingListResource,AvailableTrainingsResource, SelectedTrainingResource};
use App\Http\Resources\Trainee\Enrollment\CourseModuleResource;
use App\Http\Resources\Trainee\Enrollment\RequirementListResource;
use App\Http\Resources\Trainee\Enrollment\TraineeSingleRecResource;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\{
    AdditionalTraineeInfo,
    CourseModule,
    Training,
    Requirement,
    EnrolledCourse,
    TrainingRegFile,
    TraineeRequirement,
    EnrollmentInvoice,
};
use App\Services\Trainee\Enrollment\EnrollmentService;
use App\Services\Trainee\Invoice\TraineeInvoiceService;
use DomainException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TraineeEnrollment extends Controller
{

    protected $restrictedStatuses = [
        'PENDING',
        'RESERVED',
        'ENROLLED',
        'FOR-PAYMENT',
        'PROCESSING PAYMENT',
    ];


    public function __construct(
        protected EnrollmentService $enrollmentService,
        // protected TraineeInvoiceService $traineeInvoiceService
    )
    {}

    /** GET/VIEW REQUIREMENTS */
    public function view_module_requirements_v2(Request $request, $module,  $enrolled_id = null)
    {
        try {
            $userId = $request->has("userId") && !is_null($request->userId) ? $request->userId : $request->user()->id ?? auth()->id();
            $requirements = Requirement::query()
                ->with([
                    'trainee_file' => function ($q) use ($userId) {
                        $q->whereRelation('additional_info', 'user_id', '=', $userId)
                        ->latest();
                    },
                ])
                ->where(function($query) use ($module) {
                    $query->whereRelation('forModules', 'course_module_id', '=', $module)
                        ->orWhere("isBasic", "YES");
                })
                ->active()
                ->get();

            return RequirementListResource::collection($requirements);
        } catch (\Exception $e) {
            \Log::error("error view_module_requirements_v2", [$e->getMessage()]);
            return response()->json(["message" => "Something went wrong, Please try again."], 500);
        }
    }

    /** VIEW/GET AVAILABLE TRAINING SCHEDULES */
    public function get_available_trainings (Request $request)   {
        try {
            $userId = $request->has("userId") && !is_null($request->userId) ? $request->userId : $request->user()->id ?? auth()->id();

            $trainings = Training::with([
                "module.moduleType",
                "module.charge.chargeCategory",
                "module.facilitator.facilitator"
            ])
            ->whereDoesntHave('hasData', function($q) use($userId){
                $q->where('user_id', $userId)
                ->whereIn('enrolled_course_status', $this->restrictedStatuses);
            })
            ->where('status', Training::STATUS_ACTIVE);

            if($request->has("course_module_id")) {
                $trainings->where("course_module_id", $request->course_module_id);
            }

            $tr = $trainings->get();

            return AvailableTrainingsResource::collection($tr);
        } catch (\Exception $e) {
            \Log::error("error get_available_trainings", [$e->getMessage()]);
            return response()->json(["message" => "Something went wrong, Please try again."], 500);
        }
    }

    public function getCourseModule(getModuleRequest $request)
    {
        \Log::info("getCourseModule", [$request->validated()]);

        $validated = $request->validated();
        $userId = $validated["user_id"];
        $courses = CourseModule::with([
            "trainingFees" => function ($query) {
                $query->latest();
                },
            "moduleType"
            ])
        ->whereHas("schedules")
        ->whereDoesntHave("schedules.hasData", function($query) use ($userId){
            $query->forUser($userId)->whereNotIn("enrolled_course_status", RequestStatus::notAllowedStatuses());
        })
        ->get();

        \Log::info("getCourseModuleResponse", [$courses]);
        return CourseModuleResource::collection($courses);
    }

    public function test(Request $request)
    {
        $training = Training::query()
        ->whereKey(20260001)
        ->active()
        ->lockForUpdate()
        ->firstOrFail(["id", "schedule_slot", "course_module_id"]);

        $speReq =  $training->module->hasData->count();
        $basicReq = Requirement::active()->basic()->count();

        return response()->json(["data" => $speReq], 200);
    }

    public function send_enrollment_request(EnrollmentRequest $request) {
        try {
            DB::beginTransaction();
            $validated = $request->validated();
            $user_id = $validated["user_id"];
            // $files = count($validated["file_upload"]);

            $addtional_info_id = AdditionalTraineeInfo::where('user_id', $user_id)->value('id');

            $training = Training::query()
            ->whereKey($validated["training_id"])
            ->active()
            ->lockForUpdate()
            ->firstOrFail(["id", "schedule_slot", "course_module_id"]);

            // $this->enrollmentService->validateTraining($training, $validated, $addtional_info_id);
            // \Log::info("vakudated", [$files]);
            // return response()->json(["data" => $request->all()], 422);

            if ( !$addtional_info_id ) {
                return response()->json(['message' => 'To get started, open My Account and enter some of your information.'], 422);
            }
            //SEPARATE CONCERN
            $selected_training = new EnrolledCourse();
            $selected_training->user_id = $user_id;
            $selected_training->training_id = $validated["training_id"];
            $selected_training->enrolled_course_status = RequestStatus::RESERVED;
            $selected_training->save();

            //SEPARATE CONCERN
            foreach($validated["file_upload"] as $up_file) {
                if ($up_file['is_basic'] == 'YES') {
                    $trainee_upload = TrainingRegFile::where([
                        'requirement_id' => $up_file['req_id'],
                        'additional_trainee_info_id' => $addtional_info_id
                    ])->first() ?? new TrainingRegFile();

                    $trainee_upload->requirement_id = $up_file['req_id'];
                    $trainee_upload->additional_trainee_info_id = $addtional_info_id;
                    $trainee_upload->filename = $up_file['file'] !== 'null' ? SaveFile::save($up_file['file'], 'trainee-files') : $trainee_upload->filename ?? null;
                    $trainee_upload->locked = $up_file['file'] !== 'null' ? "N" : $trainee_upload->locked ?? "N";
                    $trainee_upload->save();
                } else {
                    $file_upload = new TraineeRequirement();
                    $file_upload->enrolled_course_id = $selected_training->id;
                    $file_upload->requirement_id = $up_file['req_id'];
                    $file_upload->filename = $up_file['file'] !== 'null' ? SaveFile::save($up_file['file'], 'training_requirement_files') : null;
                    $file_upload->save();
                }
            }

            $training->decrement('schedule_slot', 1);
            AuditHelper::log($user_id, "User " . $user_id . " sent an enrollment request.");
            Notifications::notify(
                $request->has("userId") && !is_null($request->userId) ? $request->user()->id : $user_id,
                 $request->has("userId") && !is_null($request->userId) ? $user_id : null,
                "ENROLLMENT",
                $request->has("userId") && !is_null($request->userId) ? "has created your enrollment request." : "has sent an enrollment request."
                );

            if(env("USE_EVENT")) {
                event (
                    new BETraineeApplication(''),
                    new BEAuditTrail(''),
                    new BEAccount(''),
                    new BENotification(''),
                );
            }

            DB::commit();
            return response()->json(['message' => 'Enrollment request sent successfully'], 201);
        }
        catch (ModelNotFoundException $e) {
            return response()->json(["message" => "Training record not available."], 404);
        }
        catch (DomainException $e) {
            throw $e;
        }
        catch (\Exception $e) {
            DB::rollBack();
            \Log::error("error send_enrollment_request", [$e]);
            return response()->json(['message' => "Something went wrong, Please try again!"], 400);
        }
    }

    /** CANCELLING ENROLLMENT REQUESTS */
    public function remove_training_request (CancelEnrollmentRequest $request) {
        try {
            $validated = $request->validated();
            $this->enrollmentService->cancelEnrollmentRequest($validated);

            // //TRAINING ID PASS
            Training::where("id", $validated["training_id"])->increment('schedule_slot',1);
            AuditHelper::log($validated["user_id"], "User " . $validated["user_id"] . " has cancelled training request. {$validated["training_id"]}");

            if(env("USE_EVENT")) {
                event(new BETraineeApplication(''));
            }

            return response()->json(['message' => "You've removed training request. ID# {$validated["enrolled_course_id"]}"], 200);
        }
        catch (DomainException $e) {
            throw $e;
        }
        catch (\Exception $e) {
            // DB::rollback();
            \Log::error("error_remove_training_request", [$e]);
            return response()->json(['message' => "Something went wrong, Please try again"], 500);
        }
    }

    /** UPDATING ENROLLMENT REQUESTS **/
    public function update_requirements_request(Request $request) {
        /**
         * Use Form Request Class
         * Use the EnrollmentService Class
         * Try to use updateOrCreate
         **/

        $validations = [
           'file_upload' => 'required|array',
           'file_upload.*.trainee_file_id' => 'required',
           'file_upload.*.is_basic' => 'required',
           'file_upload.*.file' => 'required|max:5120'
        ];

        $validator = \Validator::make($request->all(), $validations);

        if ($validator->fails()) {
            $errors = $validator->messages()->all();
            return response()->json(['message' => implode(',', $errors)], 422);
        } else {
            try {
                DB::beginTransaction();

                foreach($request->file_upload as $file) {
                    $record = $file['is_basic'] === "YES" ? TrainingRegFile::find($file['trainee_file_id']) : TraineeRequirement::find($file['trainee_file_id']);
                    $record->filename = SaveFile::save($file['file'], $file['is_basic'] === 'YES' ? 'trainee-files' : 'training_requirement_files' );
                    $record->remarks = null;
                    $record->locked = "N";
                    $record->save();
                }

                AuditHelper::log($request->user()->id, "User " . $request->user()->id . " updated an enrollment request.");
                Notifications::notify($request->user()->id, null, "ENROLLMENT", "has updated their enrollement request");

                if(env("USE_EVENT")) {
                    event(new BETraineeApplication(''), new BENotification(''));
                }

                DB::commit();
                return response()->json(['message' => 'Enrollment request updated successfully!'], 200);
            } catch (\Exception $e) {
                DB::rollBack();
                \Log::error('Error_updating_enrollment_request: ' . $e->getMessage());
                return response()->json(['message' => $e->getMessage()], 500);
            }
        }
    }

    public function update_invoice_trainings (Request $request) {
        \Log::info('update_invoice_trainings: ', $request->all());
        return response()->json([$request->all()], 200);
        try {
            DB::beginTransaction();

            $data = $request->training_id;
            $tn = $this->createTraceNumber();
            foreach ($data['training_id'] as $index => $trainingId) {
                $record = EnrollmentInvoice::find($data['invoice_id'][$index]);
                $record->enrolled_course_id = $trainingId;
                $record->payment_type = $data['type'][$index];
                $record->invoice_reference = $data['ref_Number'][$index];
                $record->invoice_amount = $data['amount'][$index];
                $record->invoice_status = 'FOR-VERIFICATION';
                $record->invoice_date = Carbon::now();
                $record->trace_number = $tn;

                $enrolled_training_update = EnrolledCourse::where('id', $trainingId)->first();
                $enrolled_training_update->enrolled_course_status = "PROCESSING PAYMENT";

                $enrolled_training_update->save();
                $record->save();

                AuditHelper::log($request->user()->id, "User " . $request->user()->id . " has proceed training/s for verification.");
            }

            if(env("USE_EVENT")) {
                event(new BETraineeApplication(''));
            }

            DB::commit();
            return response()->json(['message'=> 'Successfully updated'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error("error update_invoice_trainings", [$e->getMessage()]);
            return response()->json(["message" => "Something went wrong, Please try again."], 500);
        }

    }

    public function get_applications(ViewTraineeRecRequest $request)
    {
        try 
        {
            $validated = $request->validated();
            $record = $this->enrollmentService->getUserTrainings($validated);

            return ViewTraineeRecResource::collection($record);
        }
        catch (\Exception $e) {
            \Log::error("view_trainee_records", [$e]);
            return response()->json(["message" => "Something went wrong, Please try again"], 500);
        }
    }
//new
    public function get_application(ViewApplicationRequest $request)
    {
        try {
            $validated = $request->validated();
            $record = $this->enrollmentService->getUserTrainingById($validated);

            return new TraineeSingleRecResource($record);
        }
        catch (ModelNotFoundException $e) {
            return response()->json(["message" => "Training record not available."], 404);
        }
        catch (\Exception $e) {
            \Log::error("get_application", [$e]);
            return response()->json([], 500);
        }
    }

    public function viewRanksLicenses()
    {
        try {
            return response()->json(["data" => $this->enrollmentService->getRankLicense()], 200);
        }
        catch (\Exception $e) {
            \Log::error("viewRanksLicenses", [$e]);
        }
    }

    public function change_card_color (Request $request) {
        $validations = [
            'documentId' => 'required',
            'bgColor' => 'required',
        ];

        $validator = \Validator::make($request->all(), $validations);

        if($validator->fails()){
            $errors = $validator->errors()->messages();
            return response()->json(['message' => implode(', ', $errors)],400);
        } else {
            try {
                DB::beginTransaction();

                $training = EnrolledCourse::find($request->documentId);
                $training->bgColor = $request->bgColor;
                $training->save();

                DB::commit();
                return response()->json(['message' => "Success!"], 200);
            } catch (\Exception $e) {
                DB::rollback();
                return response()->json(['message' => $e->getMessage()], 500);
            }
        }
    }
}

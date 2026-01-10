<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use App\Events\BEAccount;
use App\Events\BEAuditTrail;
use App\Events\BENotification;
use App\Events\BETraineeApplication;
use App\Http\Controllers\Controller;
use App\Http\Requests\EnrollmentRequest;
use Illuminate\Http\Request;
use App\Utils\{AuditHelper, GenerateUniqueFilename, SaveFile, Notifications};
use App\Http\Resources\{TrainingListResource,AvailableTrainingsResource, SelectedTrainingResource};
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\{
    AdditionalTraineeInfo,
    Training,
    Requirement,
    EnrolledCourse,
    AuditTrail,
    CourseModule,
    RequirementSpecificModule,
    User,
    TrainingRegFile,
    TraineeRequirement,
    EnrollmentInvoice,
    TrainingSchedule
};

class TraineeEnrollment extends Controller
{

    protected $restrictedStatuses = [
        'PENDING',
        'RESERVED',
        'ENROLLED',
        'FOR-PAYMENT',
        'IR',
        'CSFB',
        'PROCESSING PAYMENT'
    ];

    /** GET/VIEW REQUIREMENTS */
    public function view_module_requirements_v2(Request $request, $moduleId,  $enrolled_id = null)
    {
        try {
            \Log::info('MODULE ID', [$moduleId, $enrolled_id]);
            $userId = $request->user()->id ?? auth()->id();
            $requirements = Requirement::
                with([
                    'trainee_file' => function ($q) use ($userId) {
                        $q->whereRelation('additional_info', 'user_id', '=', $userId);
                    },
                ])
                ->where(function($query) use ($moduleId) {
                    $query->whereRelation('forModules', 'course_module_id', '=', $moduleId)
                    ->orWhere('isBasic', "YES");
                });

                if($enrolled_id !== null) {
                    $requirements->with([
                        'uploaded_specific_requirement' => function ($q) use ($enrolled_id, $userId) {
                        $q->where('enrolled_course_id', $enrolled_id, )->whereRelation('enrolled_course', 'user_id', '=', $userId);
                        }
                    ]);
                }

                $data = $requirements->get();

            \Log::info('sameReq', [$requirements, $data]);
            return TrainingListResource::collection($data);
        } catch (\Exception $e) {
            \Log::error("error view_module_requirements_v2", [$e->getMessage()]);
            return response()->json(["message" => "Something went wrong, Please try again."], 500);
        }

    }
    /** GET/VIEW TRAINEE REQUESTS */
    public function trainee_selected_training (Request $request, $status) {
        try {
            $lst = [
                'FOR-PAYMENT' => 'FOR-PAYMENT',
                'PROCESSING_PAYMENT' => 'PROCESSING PAYMENT',
                'RESERVED' => 'RESERVED'
            ];
            $stat = [];
            foreach(explode(',',$status) as $s) [
                $stat[] = $lst[$s]
            ];

            $userId = $request->user()->id ?? auth()->id();
            $selected_courses = EnrolledCourse::with([
                "training",
                "training.module.moduleType",
                "training.module.fee",
                "invoice",
            ])
            ->where([
                'user_id' => $userId,
                'isExpired' => 'NO',
            ])
            ->whereIn('enrolled_course_status', $stat)
            ->get();

            $data = $selected_courses->map( function ($course) use ($request)  {
                $course_module_id = $course->training->course_module_id ?? null;
                $req = $this->view_module_requirements_v2($request, $course_module_id, enrolled_id: $course->id);
                $course->requirement = $req;
                return $course;
            });

            return SelectedTrainingResource::collection($data);
        } catch (\Exception $e) {
            \Log::error("error trainee_selected_training", [$e->getMessage()]);
            return response()->json(["message" => "Something went wrong, Please try again."], 500);
        }
    }

    /** VIEW/GET AVAILABLE TRAINING SCHEDULES */
    public function get_available_trainings (Request $request)   {
        try {
            $trainings = Training::with([
                "module.moduleType",
                "module.fee"
            ])
            ->whereDoesntHave('hasData', function($q) use($request){
                $q->where('user_id', $request->user()->id)
                ->whereIn('enrolled_course_status', $this->restrictedStatuses);
            })
            ->where('status', Training::STATUS_ACTIVE)
            ->get();

            return AvailableTrainingsResource::collection($trainings);
        } catch (\Exception $e) {
            \Log::error("error get_available_trainings", [$e->getMessage()]);
            return response()->json(["message" => "Something went wrong, Please try again."], 500);
        }
    }

    public function send_enrollment_request(EnrollmentRequest $request) {
        try {

            DB::beginTransaction();
            $validated = $request->validated();
            $user_id = $request->user()->id;

            $addtional_info_id = AdditionalTraineeInfo::where('user_id', $user_id)->value('id');
            $training = Training::query()
            ->where('id',$validated["training_id"])
            ->lockForUpdate()
            ->first();

            if(!$training) {
                return response()->json(['message' => 'Training not found.'], 404);
            }

            if ( !$addtional_info_id ) {
                return response()->json(['message' => 'To get started, open My Account and enter some of your information.'], 422);
            }

            $selected_training = new EnrolledCourse();
            $selected_training->user_id = $user_id;
            $selected_training->training_id = $validated["training_id"];
            $selected_training->enrolled_course_status = 'RESERVED';
            $selected_training->save();

            foreach($validated["file_upload"] as $up_file) {
                if ($up_file['is_basic'] == 'YES') {
                    $trainee_upload = TrainingRegFile::where([
                        'requirement_id' => $up_file['req_id'],
                        'additional_trainee_info_id' => $request->user()->additional_trainee_info->id
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
            Notifications::notify($user_id, null, "ENROLLMENT", "has sent their enrollement request");

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
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error("error send_enrollment_request", [$e]);
            return response()->json(['message' => "Something went wrong, Please try again!"], 400);
        }
    }

    /** CANCELLING ENROLLMENT REQUESTS */
    public function remove_training_request (Request $request, int $training_request_id) {
        \Log::info("inputs", [$request->all(), $training_request_id]);
        try {
            DB::beginTransaction();
            $training_request = EnrolledCourse::find($training_request_id);
            $training_request->enrolled_course_status = 'CANCELLED';
            $training_request->save();

            //TRAINING ID PASS
            // Training::where("id", $request->training_id)->increment('schedule_slot',1);

            AuditHelper::log($request->user()->id, "User " . $request->user()->id . " has cancelled training request.");

            if(env("USE_EVENT")) {
                event(new BETraineeApplication(''));
            }

            DB::commit();
            return response()->json(['message' => "You've removed training request. ID# $training_request_id"], 200);
        } catch (\Exception $e) {
            DB::rollback();
            \Log::error("error remove_training_request", [$e]);
            return response()->json(['message' => "Something went wrong, Please try again"], 500);
        }
    }

    /** UPDATING ENROLLMENT REQUESTS */
    public function update_enrollment_request(Request $request) {
        \Log::info("UpdateEnrollReq", $request->all());

        $validations = [
           'file_upload' => 'required|array',
           'file_upload.*.trainee_file_id' => 'required',
           'file_upload.*.is_basic' => 'required',
           'file_upload.*.file' => 'required'
        ];

        $validator = \Validator::make($request->all(), $validations);

        if ($validator->fails()) {
            $errors = $validator->messages()->all();
            return response()->json(['message' => implode(',', $errors)], 422);
        } else {
            try {
                DB::beginTransaction();

                foreach($request->file_upload as $file){
                    $record = $file['is_basic'] === "YES" ? TrainingRegFile::find($file['trainee_file_id']) : TraineeRequirement::find($file['trainee_file_id']);
                    $record->filename = SaveFile::save($file['file'], $file['is_basic'] === 'YES' ? 'trainee-files' : 'training_requirement_files' );
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
                \Log::error('Error updating enrollment request: ' . $e->getMessage());
                return response()->json(['message' => $e->getMessage()], 500);
            }
        }
    }

    public function update_invoice_trainings (Request $request) {
        \Log::info('proceed payment: ', $request->all());

        $validations = [
            'training_id' => 'required',
            'training_id.training_id'=> 'required',
        ];

        $validator = \Validator::make($request->all(), $validations);

        if($validator->fails()){
            $errors = $validator->errors()->messages();
            return response()->json(['message' => implode(', ', $errors)],400);
        } else {
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

                event(new BETraineeApplication(''));

                DB::commit();
                return response()->json(['message'=> 'Successfully updated'], 200);
            } catch (\Exception $e) {
                DB::rollBack();
                \Log::error("error update_invoice_trainings", [$e->getMessage()]);
                return response()->json(["message" => "Something went wrong, Please try again."], 500);
            }
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



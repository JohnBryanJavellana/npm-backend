<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Events\{
    BETraineeApplication,
    BEAuditTrail
};
use App\Models\{
    Requirement,
    EnrollmentInvoice,
    TraineeRequirement,
    EnrolledCourse,
    TrainingRegFile,
    AuditTrail
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
}

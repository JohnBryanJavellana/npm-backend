<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use App\Enums\ModuleNameEnum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CsmRequest;
use App\Models\{CSM, BookRes};
use App\Services\Trainee\CSM\CSMService;
use App\Utils\AuditHelper;
use DomainException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;


class CsmsController extends Controller
{


    public function __construct(
        protected CSMService $csmService
    ) {}
    public function view(Request $request)
    {
        try {
            $csm_record = CSM::forUser($request->user()->id)
            ->select(
                'user_id',
                'reference_id',
                'service',
                'cc1',
                'cc2',
                'cc3',
                'sqd0',
                'sqd1',
                'sqd2',
                'sqd3',
                'sqd4',
                'sqd5',
                'sqd6',
                'sqd7',
                'sqd8',
                'suggestion',
                'created_at',
            )
            ->get();

            return response()->json(["data" => $csm_record], 200);
        }
        catch (\Exception $e) {
            return response()->json(["message" => "No Record Found!"], 404);
        }
    }
    
    public function create(Request $request)
    {
        try {
            $userId = $request->user()->id;

            $CSM = CSM::forUser($userId)
            ->where('reference_id' , $request->reference_id)
            ->exists();

            if($CSM) {
                return response()->json(["message" => "A CSM is already existing for this request."], 422);
            }

            DB::beginTransaction();

            CSM::create(["user_id" => $userId, ...$request->all()]);

            if(strtoupper($request->service) === 'LIBRARY' && $request->has('reference_id')) {
                $this->forgetUserCache($userId);
            }
            
            AuditHelper::log($userId, "User {$userId} has successfully submitted a service survey.");
            DB::commit();

            return response()->json(["Successfully Submitted!"], 200);
        }
        catch (\Exception $e) {
            DB::rollBack();
            \Log::error("error_cms", [$e]);
            return response()->json(["message" => $e], 500);
        }
    }
    public function createV1(CsmRequest $request)
    {
        try {
            $validated = $request->validated;
            $userId = $request->user()->id;

            $this->csmService->checkExistingCSM($validated, $userId);
            $this->csmService->storeCustomerSatisfactionSurvey($validated, $userId);
            
            if($request->service === ModuleNameEnum::LIBRARY->value && $request->has('reference_id')) {
                $this->forgetUserCache($userId);
            }

            AuditHelper::log($userId, "User {$userId} has successfully submitted a service survey.");

            return response()->json(["Successfully Submitted!"], 200);
        }
        catch (DomainException $e) {
            throw $e;
        }
        catch (\Exception $e) {
            \Log::error("error cms", [$e]);
            return response()->json(["message" => $e], 500);
        }
    }


    public function delete($id)
    {
        try {   
        DB::beginTransaction();
            
        $csm_record = CSM::findOrFail($id);
        $csm_record->delete();
            
        DB::commit();
        return response()->json(["message" => "Deleted Successfully!"], 204);
        }
        catch (\Exception $e) {
        DB::rollBack();
        return response()->json(["message" => "Something went wrong, Please try again."], 405);
        }
    }

    public function forgetUserCache(int $userId)
    {
            Cache::forget("count_book_reservation:{$userId}");
            Cache::forget("user_id:{$userId}:status:");
            Cache::forget("user_id:{$userId}:status:ACTIVE");
            Cache::forget("user_id:{$userId}:status:FOR CSM");
            Cache::forget("user_id:{$userId}:status:COMPLETED");
            Cache::forget("user_id:{$userId}:status:EXTENDING");
    }
}

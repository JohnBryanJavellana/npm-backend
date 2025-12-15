<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{CSM, BookRes};
use App\Utils\AuditHelper;
use Illuminate\Support\Facades\DB;


class CsmsController extends Controller
{
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
            return response()->json(["No Record Found!"], 404);
        }
    }
    
    public function create(Request $request)
    {
        try {
            \Log::info("csm", $request->all());
            $userId = $request->user()->id;
            DB::beginTransaction();

            CSM::create(["user_id" => $userId, ...$request->all()]);
            if(strtoupper($request->service) === 'LIBRARY' && $request->has('reference_id')) {
                BookRes::where('id' , $request->reference_id)->update(['status' => 'COMPLETED']);
            }
            
            AuditHelper::log($userId, "User {$userId} has successfully submitted a service survey.");
            DB::commit();
            return response()->json(["Successfully Submitted!"], 200);
        }
        catch (\Exception $e) {
            DB::rollBack();
            \Log::error("error cms", [$e]);
            return response()->json(["Failed" => $e], 500);
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

        return response()->json(["Something went wrong, Please try again."], 405);
        }
    }
}

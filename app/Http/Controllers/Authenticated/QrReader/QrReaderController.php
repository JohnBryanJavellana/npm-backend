<?php

namespace App\Http\Controllers\Authenticated\QrReader;

use App\Http\Controllers\Controller;
use App\Http\Requests\QrReader\PaginationViewRequest;
use App\Http\Resources\QrReader\QrReaderViewResource;
use App\Services\QrReader\QrReaderService;
use Illuminate\Http\Request;

class QrReaderController extends Controller
{
    public function __construct(
        protected QrReaderService $qrReaderService
    )
    {}

    public function viewUserQrRecord(PaginationViewRequest $request)
    {
        try
        {
            $types = ["DORMITORY","LIBRARY","ENROLLMENT","GUARD_ENTRANCE","GUARD_EXIT"];
            //best way to handle this variable declarations
            $validated = $request->validated();
            $perPage = $validated["per_page"] ?? 10;
            $search = $validated["search"] ?? null;
            $filter = $validated["filter"] ?? null;

            $records = $this->qrReaderService->getUserQrRecord($request->user()->id, $perPage, $search, $filter);  
            return QrReaderViewResource::collection($records)->additional(['meta' => [
                'types' => $types,
            ]]);
        }
        catch (\Exception $e) {
            \Log::info("viewUserQrRecordError", [$e->getMessage()]);
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }
}

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
        $validated = $request->validated();
        $perPage = $validated["per_page"] ?? 10;
        $search = $validated["search"] ?? null;
        $records = $this->qrReaderService->getUserQrRecord($request->user()->id, $perPage, $search);  
        return QrReaderViewResource::collection($records);
    }
    public function storeQrReading(Request $request)
    {
        return;
    }

}

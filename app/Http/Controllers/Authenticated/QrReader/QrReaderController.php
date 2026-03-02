<?php

namespace App\Http\Controllers\Authenticated\QrReader;

use App\Http\Controllers\Controller;
use App\Http\Resources\QrReader\QrReaderViewResource;
use App\Services\QrReader\QrReaderService;
use Illuminate\Http\Request;

class QrReaderController extends Controller
{
    public function __construct(
        protected QrReaderService $qrReaderService
    )
    {}

    public function viewUserQrRecord(Request $request, $userId)
    {
        //create custom perPage
        $perPage = (int) $request->input("perPage");
        $records = $this->qrReaderService->getUserQrRecord($userId, $perPage);
        
        return QrReaderViewResource::collection($records);
    }
}

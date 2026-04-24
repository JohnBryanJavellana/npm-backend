<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authenticated\CSMAnalytics\Getcc1OptionResponseCountRequest;
use App\Http\Requests\Authenticated\CSMAnalytics\GetCSMSRequest;
use App\Http\Requests\Authenticated\CSMAnalytics\GetSpecificCSMSRequest;
use App\Models\BookRes;
use App\Models\CSM;
use App\Models\DormitoryTenant;
use App\Models\EnrolledCourse;
use App\Models\RARequestInfo;
use App\Utils\TransactionUtil;
use Illuminate\Http\JsonResponse;
use Request;
use Symfony\Component\HttpFoundation\Response;

class CSMAnalyicsController extends Controller
{
    /**
     * Summary of get_csms
     * @param GetCSMSRequest $request
     * @return JsonResponse
     */
    public function get_csms(GetCSMSRequest $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $type = $request->type;
            $fromFilter = $request->fromFilter;
            $toFilter = $request->toFilter;
            $isExporting = $request->isExporting;
            $perPage = $request->per_page ?? 10;

            $csms = CSM::with('user:id,fname,mname,lname,suffix')
                ->when($type !== "ALL", fn($query) => $query->where('service', $type))
                ->when($fromFilter && $toFilter, fn($query) => $query->whereBetween('created_at', ["$fromFilter 00:00:00", "$toFilter 23:59:59"]))
                ->latest()
                ->paginate($perPage)
                ->through(function($item) use($isExporting) {
                    $data = [
                        'id'                 => $item->id,
                        'transaction_number' => $this->getTransactionNumber($item->reference_id, $item->service),
                        'user'               => $item->user,
                        'type'               => $item->service,
                        'updated_at'         => $item->updated_at
                    ];

                    if($isExporting) {
                        $data = [
                            ...$data,
                            'cc1' => $item->cc1,
                            'cc2' => $item->cc2,
                            'cc3' => $item->cc3,
                            'sqd0' => $item->sqd0,
                            'sqd1' => $item->sqd1,
                            'sqd2' => $item->sqd2,
                            'sqd3' => $item->sqd3,
                            'sqd4' => $item->sqd4,
                            'sqd5' => $item->sqd5,
                            'sqd6' => $item->sqd6,
                            'sqd7' => $item->sqd7,
                            'sqd8' => $item->sqd8,
                            'suggestion' => $item->suggestion
                        ];
                    }

                    return $data;
                });

            return response()->json($csms, Response::HTTP_OK);
        });
    }

    /**
     * Summary of getTransactionNumber
     * @param int $referenceId
     * @param string $service
     * @return string
     */
    private function getTransactionNumber(int $referenceId, string $service): string
    {
        $model = match(true) {
            $service === "DORMITORY" => DormitoryTenant::class,
            $service === "ENROLLMENT" => EnrolledCourse::class,
            $service === "LIBRARY" => BookRes::class,
            $service === "RECREATIONAL" => RARequestInfo::class
        };

        $this_document = $model::whereKey($referenceId)->first();
        return $this_document?->trace_number ?? "NO TRACE NUMBER";
    }

    /**
     * Summary of get_specific_csm
     * @param GetSpecificCSMSRequest $request
     * @return JsonResponse
     */
    public function get_specific_csm(GetSpecificCSMSRequest $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $csmId = $request->csmId;

            $csm = CSM::with('user:id,fname,mname,lname,suffix')
                ->whereKey($csmId)
                ->firstOrFail();

            return response()->json(['csms' => $csm], Response::HTTP_OK);
        });
    }

    /**
     * Summary of get_csm_analytics
     * @param Request $request
     * @return void
     */
    public function get_csm_analytics(Request $request): JsonResponse
    {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $allSuggesions = CSM::whereNotNull('suggestion')->get()->pluck('suggestion');
            $totalResponse = CSM::count();
            $stats = CSM::query()
                ->selectRaw("
                    COUNT(CASE WHEN cc1 = 1 THEN 1 END) as cc1_1, COUNT(CASE WHEN cc1 = 2 THEN 1 END) as cc1_2, COUNT(CASE WHEN cc1 = 3 THEN 1 END) as cc1_3, COUNT(CASE WHEN cc1 = 4 THEN 1 END) as cc1_4,
                    COUNT(CASE WHEN cc2 = 1 THEN 1 END) as cc2_1, COUNT(CASE WHEN cc2 = 2 THEN 1 END) as cc2_2, COUNT(CASE WHEN cc2 = 3 THEN 1 END) as cc2_3, COUNT(CASE WHEN cc2 = 4 THEN 1 END) as cc2_4 , COUNT(CASE WHEN cc2 = 5 THEN 1 END) as cc2_5,
                    COUNT(CASE WHEN cc3 = 1 THEN 1 END) as cc3_1, COUNT(CASE WHEN cc3 = 2 THEN 1 END) as cc3_2, COUNT(CASE WHEN cc3 = 3 THEN 1 END) as cc3_3, COUNT(CASE WHEN cc3 = 4 THEN 1 END) as cc3_4,

                    COUNT(CASE WHEN sqd0 = 1 THEN 1 END) as sqd0_1, COUNT(CASE WHEN sqd0 = 2 THEN 1 END) as sqd0_2, COUNT(CASE WHEN sqd0 = 3 THEN 1 END) as sqd0_3, COUNT(CASE WHEN sqd0 = 4 THEN 1 END) as sqd0_4 , COUNT(CASE WHEN sqd0 = 5 THEN 1 END) as sqd0_5 , COUNT(CASE WHEN sqd0 = 6 THEN 1 END) as sqd0_6,
                    COUNT(CASE WHEN sqd1 = 1 THEN 1 END) as sqd1_1, COUNT(CASE WHEN sqd1 = 2 THEN 1 END) as sqd1_2, COUNT(CASE WHEN sqd1 = 3 THEN 1 END) as sqd1_3, COUNT(CASE WHEN sqd1 = 4 THEN 1 END) as sqd1_4 , COUNT(CASE WHEN sqd1 = 5 THEN 1 END) as sqd1_5 , COUNT(CASE WHEN sqd1 = 6 THEN 1 END) as sqd1_6,
                    COUNT(CASE WHEN sqd2 = 1 THEN 1 END) as sqd2_1, COUNT(CASE WHEN sqd2 = 2 THEN 1 END) as sqd2_2, COUNT(CASE WHEN sqd2 = 3 THEN 1 END) as sqd2_3, COUNT(CASE WHEN sqd2 = 4 THEN 1 END) as sqd2_4 , COUNT(CASE WHEN sqd2 = 5 THEN 1 END) as sqd2_5 , COUNT(CASE WHEN sqd2 = 6 THEN 1 END) as sqd2_6,
                    COUNT(CASE WHEN sqd3 = 1 THEN 1 END) as sqd3_1, COUNT(CASE WHEN sqd3 = 2 THEN 1 END) as sqd3_2, COUNT(CASE WHEN sqd3 = 3 THEN 1 END) as sqd3_3, COUNT(CASE WHEN sqd3 = 4 THEN 1 END) as sqd3_4 , COUNT(CASE WHEN sqd3 = 5 THEN 1 END) as sqd3_5 , COUNT(CASE WHEN sqd3 = 6 THEN 1 END) as sqd3_6,
                    COUNT(CASE WHEN sqd4 = 1 THEN 1 END) as sqd4_1, COUNT(CASE WHEN sqd4 = 2 THEN 1 END) as sqd4_2, COUNT(CASE WHEN sqd4 = 3 THEN 1 END) as sqd4_3, COUNT(CASE WHEN sqd4 = 4 THEN 1 END) as sqd4_4 , COUNT(CASE WHEN sqd4 = 5 THEN 1 END) as sqd4_5 , COUNT(CASE WHEN sqd4 = 6 THEN 1 END) as sqd4_6,
                    COUNT(CASE WHEN sqd5 = 1 THEN 1 END) as sqd5_1, COUNT(CASE WHEN sqd5 = 2 THEN 1 END) as sqd5_2, COUNT(CASE WHEN sqd5 = 3 THEN 1 END) as sqd5_3, COUNT(CASE WHEN sqd5 = 4 THEN 1 END) as sqd5_4 , COUNT(CASE WHEN sqd5 = 5 THEN 1 END) as sqd5_5 , COUNT(CASE WHEN sqd5 = 6 THEN 1 END) as sqd5_6,
                    COUNT(CASE WHEN sqd6 = 1 THEN 1 END) as sqd6_1, COUNT(CASE WHEN sqd6 = 2 THEN 1 END) as sqd6_2, COUNT(CASE WHEN sqd6 = 3 THEN 1 END) as sqd6_3, COUNT(CASE WHEN sqd6 = 4 THEN 1 END) as sqd6_4 , COUNT(CASE WHEN sqd6 = 5 THEN 1 END) as sqd6_5 , COUNT(CASE WHEN sqd6 = 6 THEN 1 END) as sqd6_6,
                    COUNT(CASE WHEN sqd7 = 1 THEN 1 END) as sqd7_1, COUNT(CASE WHEN sqd7 = 2 THEN 1 END) as sqd7_2, COUNT(CASE WHEN sqd7 = 3 THEN 1 END) as sqd7_3, COUNT(CASE WHEN sqd7 = 4 THEN 1 END) as sqd7_4 , COUNT(CASE WHEN sqd7 = 5 THEN 1 END) as sqd7_5 , COUNT(CASE WHEN sqd7 = 6 THEN 1 END) as sqd7_6,
                    COUNT(CASE WHEN sqd8 = 1 THEN 1 END) as sqd8_1, COUNT(CASE WHEN sqd8 = 2 THEN 1 END) as sqd8_2, COUNT(CASE WHEN sqd8 = 3 THEN 1 END) as sqd8_3, COUNT(CASE WHEN sqd8 = 4 THEN 1 END) as sqd8_4 , COUNT(CASE WHEN sqd8 = 5 THEN 1 END) as sqd8_5 , COUNT(CASE WHEN sqd8 = 6 THEN 1 END) as sqd8_6
                ")->first();

            $ccOptionResponseCount = [
                "Which of the following best describes your awareness of a CC?" => [
                    [
                        'label' => "Know CC and saw office CC",
                        'count' => (int)$stats->cc1_1
                    ], [
                        'label' => "Know CC but didn't see office CC",
                        'count' => (int)$stats->cc1_2
                    ], [
                        'label' => "Learned CC when saw office's CC",
                        'count' => (int)$stats->cc1_3
                    ], [
                        'label' => "Don't know CC and didn't see one",
                        'count' => (int)$stats->cc1_4
                    ],
                ],
                "If aware of CC, would you say that the CC of this office was...?" =>[
                    [
                        'label' => "Know CC and saw office CC",
                        'count' => (int)$stats->cc2_1
                    ], [
                        'label' => "Know CC but didn't see office CC",
                        'count' => (int)$stats->cc2_1
                    ], [
                        'label' => "Learned CC when saw office's CC",
                        'count' => (int)$stats->cc2_3
                    ], [
                        'label' => "Don't know CC and didn't see one",
                        'count' => (int)$stats->cc2_4
                    ], [
                        'label' => "Don't know CC and didn't see one",
                        'count' => (int)$stats->cc2_5
                    ],
                ],
                "If aware of CC, how much did the CC help you in your transaction?" => [
                    [
                        'label' => "Know CC and saw office CC",
                        'count' => (int)$stats->cc3_1
                    ], [
                        'label' => "Know CC but didn't see office CC",
                        'count' => (int)$stats->cc3_2
                    ], [
                        'label' => "Learned CC when saw office's CC",
                        'count' => (int)$stats->cc3_3
                    ], [
                        'label' => "Don't know CC and didn't see one",
                        'count' => (int)$stats->cc3_4
                    ],
                ],
            ];

            $sqdOptionResponseQ = ["I am satisfied with the service that I availed.", "I spent a reasonable amount of time for my transaction.", "The office followed the transaction's requirements and steps based on the information provided.", "The steps (including payment) I needed to do for my transaction were easy and simple.", "I easily found information about my transaction from the office or its website.", "I paid a reasonable amount of fees for my transaction.", "I feel the office was fair to everyone, or 'walang palakasan', during my transaction.", "I was treated courteously by the staff, and (if asked for help) the staff was helpful.", "I got what I needed from the government office, or (if denied) denial of request was sufficiently explained to me."];
            $sqdOptionResponseCount = [];

            for($i = 0; $i <= 8; $i++) {
                $sqdOptionResponseCount[$sqdOptionResponseQ[$i]] = [
                    [
                        'label' => "Strongly Disagree",
                        'count' => (int)$stats->{"sqd{$i}_{$i}"}
                    ], [
                        'label' => "Disagree",
                        'count' => (int)$stats->{"sqd{$i}_" . $i + 1}
                    ], [
                        'label' => "Neither Agree nor Disagree",
                        'count' => (int)$stats->{"sqd{$i}_" . $i + 2}
                    ], [
                        'label' => "Agree",
                        'count' => (int)$stats->{"sqd{$i}_" . $i + 3}
                    ], [
                        'label' => "Strongly Agree",
                        'count' => (int)$stats->{"sqd{$i}_" . $i + 4}
                    ], [
                        'label' => 'N/A',
                        'count' => (int)$stats->{"sqd{$i}_" . $i + 5}
                    ]
                ];
            }

            return response()->json([
                'ccOptionResponseCount' => $ccOptionResponseCount,
                'sqdOptionResponseCount' => $sqdOptionResponseCount,
                'allSuggesions' => $allSuggesions,
                'totalResponse' => $totalResponse
            ], Response::HTTP_OK);
        });
    }
}

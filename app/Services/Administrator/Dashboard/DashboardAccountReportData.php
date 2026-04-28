<?php

namespace App\Services\Administrator\Dashboard;

use App\Helpers\Administrator\General\CountCollection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;


class DashboardAccountReportData extends CountCollection
{
    /**
     * Summary of accountReportData
     * @param Request $request
     * @param Builder $auditTrailBuilder
     * @return array{accountActivities: array{audit_trails: string, email: string}}
     */
    public function accountReportData(Request $request, Builder $auditTrailBuilder): array
    {
        $accountActivities = $this->accountActivities($request, $auditTrailBuilder);

        return [
            'accountActivities' => $accountActivities
        ];
    }

    /**
     * Summary of accountActivities
     * @param Request $request
     * @param Builder $auditTrailBuilder
     * @return array{audit_trails: string, email: string}
     */
    private function accountActivities(Request $request, Builder $auditTrailBuilder): array
    {
        return [
            'audit_trails' => CountCollection::startCount($auditTrailBuilder->clone()->where('user_id', $request->user()->id)),
            'email'        => $request->user()->email
        ];
    }
}

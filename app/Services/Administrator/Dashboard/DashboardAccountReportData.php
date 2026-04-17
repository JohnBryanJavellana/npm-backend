<?php

namespace App\Services\Administrator\Dashboard;
use App\Helpers\Administrator\General\CountCollection;
use Illuminate\Database\Eloquent\Builder;

class DashboardAccountReportData extends CountCollection
{
    /**
     * Summary of accountReportData
     * @param object $request
     * @param Builder $auditTrailBuilder
     * @return array{accountActivities: array{audit_trails: string, email: string}}
     */
    public function accountReportData(object $request, Builder $auditTrailBuilder): array
    {
        $accountActivities = $this->accountActivities($request, $auditTrailBuilder);

        return [
            'accountActivities' => $accountActivities
        ];
    }

    /**
     * Summary of accountActivities
     * @param object $request
     * @param Builder $auditTrailBuilder
     * @return array{audit_trails: string, email: string}
     */
    private function accountActivities(object $request, Builder $auditTrailBuilder): array
    {
        return [
            'email'        => (string) $request->user()->email,
            'audit_trails' => CountCollection::startCount($auditTrailBuilder->clone()->where('user_id', $request->user()->id))
        ];
    }
}

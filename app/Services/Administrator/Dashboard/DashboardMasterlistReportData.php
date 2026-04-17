<?php

namespace App\Services\Administrator\Dashboard;
use App\Helpers\Administrator\General\CountCollection;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

class DashboardMasterlistReportData extends CountCollection
{
    /**
     * Summary of masterlistReportData
     * @param Builder $userBuilder
     * @param Builder $employerBuilder
     * @return array{employerCount: array, totalUserRegistration: int, userAccountStatus: array{UNVERIFIED: mixed, VERIFIED: mixed}}
     */
    public function masterlistReportData(Builder $userBuilder, Builder $employerBuilder) {
        $totalUserRegistration = $userBuilder->clone()->count();
        $employerCount = $this->employerCount($employerBuilder);
        $userAccountStatus = $this->userAccountStatus($userBuilder->clone());

        return [
            'totalUserRegistration' => $totalUserRegistration,
            'employerCount' => $employerCount,
            'userAccountStatus' => $userAccountStatus
        ];
    }

    /**
     * Summary of employerCount
     * @param Builder $employerBuilder
     * @return array{this_month: mixed, total: mixed}
     */
    private function employerCount (Builder $employerBuilder) {
        return [
            'total'      => CountCollection::startCount($employerBuilder),
            'this_month' => CountCollection::startCount($employerBuilder->clone()->whereMonth('created_at', Carbon::now()->format('m')))
        ];
    }

    /**
     * Summary of userAccountStatus
     * @param Builder $userBuilder
     * @return array{UNVERIFIED: mixed, VERIFIED: mixed}
     */
    private function userAccountStatus(Builder $userBuilder) {
        return [
            'VERIFIED'   => CountCollection::startCount($userBuilder->clone()->whereNotNull('email_verified_at')),
            'UNVERIFIED' => CountCollection::startCount($userBuilder->clone()->whereNull('email_verified_at'))
        ];
    }
}

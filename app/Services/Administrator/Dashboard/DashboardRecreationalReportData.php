<?php

namespace App\Services\Administrator\Dashboard;
use App\Enums\Administrator\RAEnum;
use App\Helpers\Administrator\General\CountCollection;
use Illuminate\Database\Eloquent\Builder;

class DashboardRecreationalReportData extends CountCollection
{
    /**
     * Summary of recreationalReportData
     * @param Builder $recreationalBuilder
     * @return array{recreationalApplications: array, totalRecreationalApplications: int}
     */
    public function recreationalReportData(Builder $recreationalBuilder) {
        $totalRecreationalApplications = $recreationalBuilder->clone()->count();
        $recreationalApplications = $this->recreationalApplications($recreationalBuilder);

        return [
            'totalRecreationalApplications' => $totalRecreationalApplications,
            'recreationalApplications' => $recreationalApplications
        ];
    }

    /**
     * Summary of recreationalApplications
     * @param Builder $recreationalBuilder
     * @return array{ACTIVE: mixed, COMPLETED: mixed, FOR CSM: mixed, PENDING: mixed}
     */
    private function recreationalApplications(Builder $recreationalBuilder) {
        return [
            'PENDING' => CountCollection::startCount($recreationalBuilder->clone()->where('status', RAEnum::PENDING)),
            'FOR CSM' => CountCollection::startCount($recreationalBuilder->clone()->where('status', RAEnum::FOR_CSM)),
            'ACTIVE' => CountCollection::startCount($recreationalBuilder->clone()->where('status', RAEnum::ACTIVE)),
            'COMPLETED' => CountCollection::startCount($recreationalBuilder->clone()->where('status', RAEnum::COMPLETED))
        ];
    }
}

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
     * @return array{recreationalApplications: array, totalRecreationalApplications: string}
     */
    public function recreationalReportData(Builder $recreationalBuilder): array
    {
        $totalRecreationalApplications = CountCollection::startCount($recreationalBuilder->clone());
        $recreationalApplications = $this->recreationalApplications($recreationalBuilder);

        return [
            'totalRecreationalApplications' => $totalRecreationalApplications,
            'recreationalApplications' => $recreationalApplications
        ];
    }

    /**
     * Summary of recreationalApplications
     * @param Builder $recreationalBuilder
     * @return array{ACTIVE: string, COMPLETED: string, FOR CSM: string, PENDING: string, TOTAL: string}
     */
    private function recreationalApplications(Builder $recreationalBuilder): array
    {
        return [
            'ACTIVE' => CountCollection::startCount($recreationalBuilder->clone()->where('status', RAEnum::ACTIVE)),
            'COMPLETED' => CountCollection::startCount($recreationalBuilder->clone()->where('status', RAEnum::COMPLETED)),
            'FOR CSM' => CountCollection::startCount($recreationalBuilder->clone()->where('status', RAEnum::FOR_CSM)),
            'PENDING' => CountCollection::startCount($recreationalBuilder->clone()->where('status', RAEnum::PENDING)),
            'TOTAL' => CountCollection::startCount($recreationalBuilder)
        ];
    }
}

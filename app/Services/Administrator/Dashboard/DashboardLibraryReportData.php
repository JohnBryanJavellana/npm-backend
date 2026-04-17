<?php

namespace App\Services\Administrator\Dashboard;
use App\Enums\Administrator\LibraryEnum;
use App\Enums\NotificationEnum;
use App\Helpers\Administrator\General\CountCollection;
use Illuminate\Database\Eloquent\Builder;

class DashboardLibraryReportData extends CountCollection
{
    /**
     * Summary of libraryReportData
     * @param Builder $bookResBuilder
     * @param Builder $bookCopyBuilder
     * @param Builder $notificationBuilder
     * @return array{actionCenter: array{new_reservations: mixed, overdue: int, libraryHealthCount: array{available: mixed, total: mixed}, recentActivity: Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection, totalLibraryApplications: int}}
     */
    public function libraryReportData(Builder $bookResBuilder, Builder $bookCopyBuilder, Builder $notificationBuilder) {
        $totalLibraryApplications = $bookResBuilder->clone()->count();
        $libraryHealthCount = $this->libraryHealthCount($bookCopyBuilder);
        $actionCenter = $this->actionCenter($bookCopyBuilder);
        $recentActivity = $this->recentActivity($notificationBuilder);

        return [
            'totalLibraryApplications' => $totalLibraryApplications,
            'libraryHealthCount' => $libraryHealthCount,
            'actionCenter' => $actionCenter,
            'recentActivity' => $recentActivity
        ];
    }

    /**
     * Summary of libraryHealthCount
     * @param Builder $bookCopyBuilder
     * @return array{available: mixed, total: mixed}
     */
    private function libraryHealthCount(Builder $bookCopyBuilder) {
        return [
            'total'     => CountCollection::startCount($bookCopyBuilder),
            'available' => CountCollection::startCount($bookCopyBuilder->clone()->where('status', LibraryEnum::AVAILABLE)),
        ];
    }

    /**
     * Summary of actionCenter
     * @param Builder $bookResBuilder
     * @return array{new_reservations: mixed, overdue: int}
     */
    private function actionCenter(Builder $bookResBuilder) {
        return [
            'overdue' => 0,
            'new_reservations' => CountCollection::startCount($bookResBuilder->clone()->where('status', LibraryEnum::PENDING)),
        ];
    }

    /**
     * Summary of recentActivity
     * @param Builder $notificationBuilder
     * @return Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection
     */
    private function recentActivity(Builder $notificationBuilder) {
        $recentActivity = $notificationBuilder
            ->with('sender')
            ->where('type', NotificationEnum::LIBRARY)
            ->orderBy('created_at', 'DESC')
            ->take(3)
            ->get();

        return $recentActivity;
    }
}

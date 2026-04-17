<?php

namespace App\Services\Administrator\Dashboard;
use App\Enums\Administrator\LibraryEnum;
use App\Enums\NotificationEnum;
use App\Helpers\Administrator\General\CountCollection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class DashboardLibraryReportData extends CountCollection
{
    /**
     * Summary of libraryReportData
     * @param Builder $bookResBuilder
     * @param Builder $bookCopyBuilder
     * @param Builder $notificationBuilder
     * @return array{libraryHealthCount: array{available: string, total: string, recentActivity: Collection, reservationStatus: array{newReservations: string, overdue: string}, totalLibraryApplications: string}}
     */
    public function libraryReportData(Builder $bookResBuilder, Builder $bookCopyBuilder, Builder $notificationBuilder): array
    {
        $totalLibraryApplications = CountCollection::startCount($bookResBuilder->clone());
        $reservationStatus = $this->reservationStatus($bookResBuilder);
        $recentActivity = $this->recentActivity($notificationBuilder);
        $libraryHealthCount = $this->libraryHealthCount($bookCopyBuilder);

        return [
            'totalLibraryApplications' => $totalLibraryApplications,
            'reservationStatus'        => $reservationStatus,
            'libraryHealthCount'       => $libraryHealthCount,
            'recentActivity'           => $recentActivity
        ];
    }

    /**
     * Summary of libraryHealthCount
     * @param Builder $bookCopyBuilder
     * @return array{available: string, total: string}
     */
    private function libraryHealthCount(Builder $bookCopyBuilder): array
    {
        return [
            'total'     => CountCollection::startCount($bookCopyBuilder->clone()),
            'available' => CountCollection::startCount($bookCopyBuilder->clone()->where('status', LibraryEnum::AVAILABLE))
        ];
    }

    /**
     * Summary of reservationStatus
     * @param Builder $bookResBuilder
     * @return array{newReservations: string, overdue: string}
     */
    private function reservationStatus(Builder $bookResBuilder): array
    {
        return [
            'overdue'         => CountCollection::startCount($bookResBuilder->clone()->whereHas('borrowedBooks', fn($query) => $query->where('status', LibraryEnum::EXPIRED))),
            'newReservations' => CountCollection::startCount($bookResBuilder->clone()->where('status', LibraryEnum::PENDING))
        ];
    }

    /**
     * Summary of recentActivity
     * @param Builder $notificationBuilder
     * @return Collection
     */
    private function recentActivity(Builder $notificationBuilder): Collection
    {
        $recentActivity = $notificationBuilder
            ->with('sender')
            ->where('type', NotificationEnum::LIBRARY)
            ->orderBy('created_at', 'DESC')
            ->take(3)
            ->get();

        return $recentActivity;
    }
}

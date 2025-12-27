<?php

namespace App\Observers;

use App\Models\DormitoryTenant;

class DormitoryTenantObserver
{
    /**
     * Handle the DormitoryTenant "created" event.
     */
    public function created(DormitoryTenant $dormitoryTenant): void
    {
        //
    }

    /**
     * Handle the DormitoryTenant "updated" event.
     */
    public function updated(DormitoryTenant $dormitoryTenant): void
    {
        //
    }

    /**
     * Handle the DormitoryTenant "deleted" event.
     */
    public function deleted(DormitoryTenant $dormitoryTenant): void
    {
        //
    }

    /**
     * Handle the DormitoryTenant "restored" event.
     */
    public function restored(DormitoryTenant $dormitoryTenant): void
    {
        //
    }

    /**
     * Handle the DormitoryTenant "force deleted" event.
     */
    public function forceDeleted(DormitoryTenant $dormitoryTenant): void
    {
        //
    }
}

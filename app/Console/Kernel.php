<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('set-tenant-as-offset')->daily();
        $schedule->command('library-book-borrow-reminder')->daily();
        $schedule->command('l-m-s-check-for-expired-examination')
            ->everyMinute()
            ->appendOutputTo(storage_path('logs/exam_cron.log'));
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

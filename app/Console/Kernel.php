<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    
        protected function schedule(Schedule $schedule): void
    {
        $schedule->command('library-book-borrow-reminder')->daily();
        $schedule->command('l-m-s-check-for-expired-examination')
            ->everyMinute()
            ->appendOutputTo(storage_path('logs/exam_cron.log'));
    }

   
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

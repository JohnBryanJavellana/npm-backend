<?php

namespace App\Console\Commands;

use App\Models\AssessmentAttempt;
use Illuminate\Support\Carbon;
use Illuminate\Console\Command;

class LMSCheckForExpiredExamination extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:l-m-s-check-for-expired-examination';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $getAllInProgressAttempts = AssessmentAttempt::with([
            'assessment'
        ])->where([
            'status' => 'IN_PROGRESS'
        ])->get();

        foreach ($getAllInProgressAttempts as $attempt) {
            if(Carbon::parse($attempt->created_at)->diffInMinutes(now()) > $attempt->assessment->time_limit) {
                $attempt->update([
                    'status' => 'SUBMITTED',
                    'submitted_at' => now()
                ]);
            }
        }
    }
}

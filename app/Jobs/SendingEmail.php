<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class SendingEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    protected $tries = 3;
    protected $timeout = 3600;
    /**
     * Create a new job instance.
     */
    public function __construct(public User $user,public $mailable) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            \Mail::to($this->user->email)->send($this->mailable);
            \Log::info("sent mail job handle", [$this->user->email]);

        } catch (\Throwable $th) {
            \Log::error("error mail job handle", [$th]);
        }
    }
}

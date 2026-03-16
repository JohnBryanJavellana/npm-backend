<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendReturnReminderJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;
    protected $bookTitle;
    protected $dueDate;

    /**
     * Create a new job instance.
     */
    public function __construct(User $user, string $bookTitle, string $dueDate)
    {
        $this->user = $user;
        $this->bookTitle = $bookTitle;
        $this->dueDate = $dueDate;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $user = $this->user;
        $bookTitle = $this->bookTitle;
        $dueDate = $this->dueDate;

        Mail::send('emails.return-reminder', [
            'userName'  => $user->fname . ' ' . $user->lname,
            'bookTitle' => $bookTitle,
            'dueDate'   => $dueDate
        ], function ($message) use ($user) {
            $message->to($user->email)
                    ->subject('Book Return Reminder - ' . config('app.name'));
        });
    }
}
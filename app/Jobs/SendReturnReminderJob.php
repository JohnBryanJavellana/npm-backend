<?php

namespace App\Jobs;

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

    public function __construct($user, $bookTitle, $dueDate)
    {
        $this->user = $user;
        $this->bookTitle = $bookTitle;
        $this->dueDate = $dueDate;
    }

    public function handle()
    {
        Mail::send('emails.return-reminder', [
            'userName' => $this->user->fname . ' ' . $this->user->lname,
            'bookTitle' => $this->bookTitle,
            'dueDate' => $this->dueDate
        ], function ($message) {

            $message->to($this->user->email)
                ->subject('Library Book Return Reminder');
        });
    }
}
<?php

namespace App\Console\Commands;

use App\Jobs\SendingEmail;
use App\Mail\BookReturnReminderMail;
use App\Models\BookReservation;
use App\Models\User;
use App\Utils\Notifications;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Notification;

class LibraryBookBorrowReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:library-book-borrow-reminder';

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
        $targetDate = Carbon::today()->addDays(2);
        $needToRemind = BookReservation::whereDate('to_date', $targetDate)->get();

        if ($needToRemind->isEmpty()) {
            $this->info("No reminders for " . $targetDate->toDateString());
            return;
        }

        foreach ($needToRemind as $reservation) {
            $user = User::findOrFail($reservation->bookRes->trainee->id);

            Notifications::notify(1, $user->id, "LIBRARY", 'Reminder: Your borrowed book "' . $reservation->books->catalog->title . '" is due on ' . $reservation->to_date);
            SendingEmail::dispatch($user, new BookReturnReminderMail($user->fname ?? 'User', $reservation->books->catalog->title, $reservation->to_date));

            $this->info("Reminded: " . $reservation->id . " for return on " . $reservation->to_date);
        }

        $this->info('Reminder process completed.');
    }
}

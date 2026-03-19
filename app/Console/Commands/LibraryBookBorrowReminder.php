<?php

namespace App\Console\Commands;

use App\Jobs\SendingEmail;
use App\Mail\BookReturnReminderMail;
use App\Models\BookReservation;
use App\Models\User;
use App\Utils\Notifications;
use Carbon\Carbon;
use Illuminate\Console\Command;

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
            $formattedDate = Carbon::parse($reservation->to_date)->format('F d, Y');

            Notifications::notify(1, $user->id, "LIBRARY", 'Reminder: Your borrowed book "' . $reservation->books->catalog->title . '" is due on ' . $formattedDate);
            SendingEmail::dispatch($user, new BookReturnReminderMail($user->fname ?? 'User', $reservation->books->catalog->title, $formattedDate));

            $this->info("Reminded: " . $reservation->id . " for return on " . $formattedDate);
        }

        $this->info('Reminder process completed.');
    }
}

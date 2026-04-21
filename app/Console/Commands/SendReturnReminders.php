<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\BookReservation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookReturnReminderMail;
use App\Models\Notification;

class SendReturnReminders extends Command
{
    protected $signature = 'books:send-return-reminders';
    protected $description = 'Send automated reminders 2 days before book return deadline';

    public function handle()
    {
        $this->info("Running automated return reminder system...");

        $today = Carbon::now()->startOfDay();
        $reminderDate = $today->copy()->addDays(2);

        $this->info("Checking reservations due on: " . $reminderDate->toDateString());

        $reservations = BookReservation::with([
            'bookRes.user',
            'bookCopy.book.catalog'
        ])
        ->where('status', 'APPROVED')
        ->whereDate('to_date', $reminderDate)
        ->get();

        $this->info("Matching reservations: " . $reservations->count());

        if ($reservations->isEmpty()) {
            $this->warn("No reminders to send today.");
            return;
        }

        foreach ($reservations as $reservation) {

            $user = $reservation->bookRes->user ?? null;

            $bookTitle = $reservation->bookCopy?->book?->catalog?->title
                ?? $reservation->book?->catalog?->title
                ?? 'Your borrowed book';

            $dueDate = Carbon::parse($reservation->to_date)->format('F j, Y');

            $this->info("--------------------------------------------------");
            $this->info("User: " . ($user->email ?? 'NO USER'));
            $this->info("Title: " . $bookTitle);
            $this->info("Due: " . $dueDate);

            if ($user && $user->email) {

                Mail::to($user->email)->send(
                    new BookReturnReminderMail(
                        $user->fname ?? 'User',
                        $bookTitle,
                        $dueDate
                    )
                );

                //SAVE CUSTOM NOTIFICATION
                Notification::create([
                    'user_id' => $user->id,
                    'to_user' => $user->id,
                    'type' => 'LIBRARY',
                    'message' => 'Reminder: Your borrowed book "' . $bookTitle . '" is due on ' . $dueDate,
                    'is_read' => 'NO'
                ]);

                $this->info("Reminder sent to: " . $user->email);

            } else {
                $this->error("Skipped (no valid user/email)");
            }
        }

        $this->info("All reminders processed successfully.");
    }
}
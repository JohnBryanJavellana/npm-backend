<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class BookReturnReminderNotification extends Notification
{
    use Queueable;

    protected $bookTitle;
    protected $dueDate;

    public function __construct($bookTitle, $dueDate)
    {
        $this->bookTitle = $bookTitle;
        $this->dueDate = $dueDate;
    }

    public function via($notifiable)
    {
        return ['database']; // stores in notifications table
    }

    public function toDatabase($notifiable)
    {
        return [
            'title' => 'Book Return Reminder',
            'message' => 'Your borrowed book "' . $this->bookTitle . '" is due on ' . $this->dueDate,
            'book_title' => $this->bookTitle,
            'due_date' => $this->dueDate,
        ];
    }
}
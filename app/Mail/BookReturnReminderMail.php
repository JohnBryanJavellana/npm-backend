<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookReturnReminderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $userName;
    public $bookTitle;
    public $dueDate;

    public function __construct($userName, $bookTitle, $dueDate)
    {
        $this->userName  = $userName;
        $this->bookTitle = $bookTitle;
        $this->dueDate   = $dueDate;
    }

    public function build()
    {
        return $this->subject('Library Book Return Reminder')
                    ->view('emails.return-reminder');
    }
}
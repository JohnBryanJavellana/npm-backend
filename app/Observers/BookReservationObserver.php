<?php

namespace App\Observers;

use App\Models\Book;
use App\Models\BookReservation;
use Illuminate\Support\Facades\Cache;

class BookReservationObserver
{
    /**
     * Handle the BookReservation "created" event.
     */
    public function created(BookReservation $bookReservation): void
    {
        //
    }

    /**
     * Handle the BookReservation "updated" event.
     */
    public function updated(BookReservation $bookReservation): void
    {
        $bookReservation->loadMissing("bookRes");

        if(!$bookReservation->bookRes) {
            return;
        }

        $userId = $bookReservation->bookRes->user_id;

        Cache::increment("user:$userId:version"); 
    }

    /**
     * Handle the BookReservation "deleted" event.
     */
    public function deleted(BookReservation $bookReservation): void
    {

    }

    /**
     * Handle the BookReservation "restored" event.
     */
    public function restored(BookReservation $bookReservation): void
    {
        //
    }

    /**
     * Handle the BookReservation "force deleted" event.
     */
    public function forceDeleted(BookReservation $bookReservation): void
    {
        //
    }
}

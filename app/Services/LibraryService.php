<?php

namespace App\Services;

use App\Models\{BookRes, Book, BookCopy};
use App\Utils\GenerateTrace;

class LibraryService {

    public function createReservation($validated, $user)
    {

        $this->availableBooks($validated["book_id"]);

        $this->createBookRes(
            $user->id,
            $validated["purpose"]
        );
    }

    private function availableBooks(array     $book_id) {
        
        $books = Book::whereIn("id", $book_id)
        ->select("id", "pdf_copy")
        ->get()
        ->keBy("id");

        $physical_books = $books->filter(fn($book) => !$book->pdf_copy);

        if(!$physical_books) {
            return;
        }

    }

    private function createBookRes($userId, $purpose) {

        BookRes::create([
            "user_id" => $userId,
            "trace_number" => GenerateTrace::createTraceNumber(BookRes::class),
            "purpose" => $purpose,
            "type" => BookRes::TYPE_ONLINE,
        ]);
    }
}
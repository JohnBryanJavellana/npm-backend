<?php

namespace App\Services;

use App\Models\{BookRes, Book, BookCopy};
use App\Utils\GenerateTrace;
use Illuminate\Support\Facades\DB;


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

        $physical_books = $books->filter(fn($book) => !$book->pdf_copy)
        ->pluck('id')
        ->toArray();

        if(!$physical_books) {
            return;
        }

        $available = BookCopy::whereIn("book_id", $physical_books)
        ->where('status', "AVAILABLE")
        ->select('book_id', DB::raw("COUNT(*) as count"))
        ->orderBy('book_id')
        ->pluck('book_id', 'count');


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
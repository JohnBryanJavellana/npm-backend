<?php

namespace App\Services;

use App\Models\{BookRes, Book, BookCopy, BookReservation, BookCart};
use App\Utils\GenerateTrace;
use Illuminate\Support\Facades\DB;


class LibraryService {

    public function createReservation($validated, $user)
    {
        return DB::transaction(function() use ($validated, $user) {

            $this->validateBook($validated["book_id"]);

            $res = $this->createBookRes(
                $user->id,
                $validated["purpose"]
            );

            $BookData = $this->prepareData($validated["book_id"]);

            foreach($validated["book_id"] as $book) {
                $this->reserveBook(
            $res,
            $BookData[$book],
            $validated["from"],
            $validated["to"],
            $book,
            $user
                );
            }
        });
    }

    private function validateBook(array     $book_id) {
        \Log::info("validateBook", $book_id);
        $books = Book::whereIn("id", $book_id)
        ->select("id", "pdf_copy")
        ->get()
        ->keyBy("id");

        $physical_books = $books->filter(fn($book) => !$book->pdf_copy)
        ->pluck('id')
        ->toArray();
        \Log::info("validateBook1", $physical_books);
        if(!$physical_books) {
            return;
        }
// 114
        $available = BookCopy::whereIn("book_id", $physical_books)
        ->where('status', "AVAILABLE")
        ->select('book_id', DB::raw("COUNT(*) as count"))
        ->groupBy('book_id')
        ->pluck('count', 'book_id');

        \Log::info("validateBook2", [$available]);

        $unavailable = collect($physical_books)->reject(fn($book) => ($available[$book] ?? 0) > 0);
        // $unavailable = collect($physical_books)->reject(fn($book) => \Log::info("validateBook3", [$available[$book]]));

        if($unavailable->isNotEmpty()) {
            throw new \DomainException("The following books have no available copies: ", $unavailable->implode(', '));
        }
        \Log::info("pass", ["passed"]);

    }

    private function prepareData(array $book_id) {
        $books = Book::whereIn("id" , $book_id)
        ->select("id", "pdf_copy")
        ->get()
        ->keyBy("id");

        $physical_books = $books->filter(fn($book) => !$book->pdf_copy)
        ->pluck('id')
        ->toArray();

        $copies = [];
        if($physical_books) {
            $copies = BookCopy::whereIn('book_id', $physical_books)
            ->where("status", "AVAILABLE")
            ->lockForUpdate()
            ->get()
            ->groupBy('id');
        }

        return $books->map(function($book) use($copies) {
            return [
                "book" => $book,
                "copy" => $book->pdf_copy ? null : $copies[$book->id]->first()
            ];
        });
    }

    private function createBookRes($userId, $purpose) {
        return  BookRes::create([
            "user_id" => $userId,
            "trace_number" => GenerateTrace::createTraceNumber(BookRes::class),
            "purpose" => $purpose,
            "type" => BookRes::TYPE_ONLINE,
        ]);
    }

    private function reserveBook($res, $book_data, $from, $to, $book_id, $user) {
        $copy = $book_data["copy"];

        BookReservation::create([
            "book_res_id" => $res->id,
            "book_copy_id" => $copy->id,
            "from_date" => $from,
            "to_date" => $to,
            "book_id" => $book_id,
        ]);

        if($copy) {
            $copy->update(["status" => "RESERVED"]);
        }

        BookCart::where(['book_id' => $book_id, 'user_id' => $user->id])->delete();
    }
}
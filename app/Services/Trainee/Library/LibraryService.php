<?php

namespace App\Services\Trainee\Library;

use App\Models\{BookRes, Book, BookCopy, BookReservation, BookCart};
use App\Utils\GenerateTrace;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class LibraryService {

    protected $bookModel;
    protected $bookResModel;
    protected $bookReservationModel;

    public function __construct(Book $bookModel , BookRes $bookResModel, BookReservation $bookReservationModel)
    {
        $this->bookModel = $bookModel;
        $this->bookResModel = $bookResModel;
        $this->bookReservationModel = $bookReservationModel;
    }

    public function updateOverDue($userId)
    {
        DB::transaction(function() use ($userId){
            $this->bookReservationModel::where("status", "RECEIVED")
            ->whereRelation("bookRes", "user_id", "=", $userId)
            ->whereNull("book_copy_id")
            ->where('to_date', '<', now())
            ->update(["status" => "EXPIRED"]);
        });
    }

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

    public function getOverDue()
    {
        $books = $this->getBooks(["*"],[
            "hasData", "catalog", "catalog.genre"
        ]);

        $record = $books->whereHas("hasData", fn($q) => $q->where('to_date', '<', now()));

        return $record;
    }

    private function getBooks($columns = "*", $with)
    {
        $query = $this->bookModel->newQuery()->select($columns);

        if(!empty($with)) {
            $query->with($with);
        }

        return $query;
    }

    private function validateBook(array $book_id) {
        $books = $this->getBooks(["id", "pdf_copy"], ['catalog:id,title'])
        ->whereIn("id", $book_id)
        ->get()
        ->keyBy("id");

        $physical_books = $books->filter(fn($book) => !$book->pdf_copy)
        ->pluck('id')
        ->toArray();

        if(!$physical_books) {
            return;
        }

        $available = BookCopy::whereIn("book_id", $physical_books)
        ->where('status', "AVAILABLE")
        ->select('book_id', DB::raw("COUNT(*) as count"))
        ->groupBy('book_id')
        ->pluck('count', 'book_id');

        $unavailable = collect($physical_books)->reject(fn($book) => ($available[$book] ?? 0) > 0);

        if($unavailable->isNotEmpty()) {
            throw new \DomainException("The following books have no available copies: " . $unavailable->implode(', '));
        }
    }

    private function prepareData(array $book_id) {
        $books = $this->bookModel::whereIn("id" , $book_id)
        ->select("id", "pdf_copy")
        ->get()
        ->keyBy("id");

        $physical_books = $books->filter(fn($book) => !$book->pdf_copy)
        ->pluck('id')
        ->toArray();

        $copies = [];
        if(!empty($physical_books)) {
            $copies = BookCopy::whereIn('book_id', $physical_books)
            ->where("status", "AVAILABLE")
            ->lockForUpdate()
            ->get()
            ->groupBy('book_id');
        }

        return $books->map(function($book) use($copies) {
            return [    
                "book" => $book,
                "copy" => $book->pdf_copy ? null : $copies[$book->id]->first()
            ];
        });
    }

    private function createBookRes($userId, $purpose) {
        return  $this->bookResModel::create([
            "user_id" => $userId,
            "trace_number" => GenerateTrace::createTraceNumber(BookRes::class),
            "purpose" => $purpose,
            "type" => $this->bookResModel::TYPE_ONLINE,
        ]);
    }

    private function reserveBook($res, $book_data, $from, $to, $book_id, $user) {
        $copy = $book_data["copy"];

        BookReservation::create([
            "book_res_id" => $res->id,
            "book_copy_id" => $copy?->id,
            "from_date" => Carbon::parse($from)->format('Y-m-d'),
            "to_date" => Carbon::parse($to)->format('Y-m-d'),
            "book_id" => $book_id,
        ]);

        if($copy) {
            $copy->update(["status" => "RESERVED"]);
        }

        BookCart::where(['book_id' => $book_id, 'user_id' => $user->id])->delete();
    }

    public function cancelBookReservation()
    {
        return;
    }
}
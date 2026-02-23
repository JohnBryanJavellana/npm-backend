<?php

namespace App\Services\Trainee\Library;

use App\Enums\RequestStatus;
use App\Enums\UserRoleEnum;
use App\Models\{BookRes, Book, BookCopy, BookReservation, BookCart};
use App\Utils\GenerateTrace;
use Carbon\Carbon;
use DomainException;
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

    public function preparedData($validated)
    {

        $book_ids = collect($validated["data"])->pluck("book_id");
        $statuses = [
            RequestStatus::PENDING->value,
            RequestStatus::APPROVED->value,
            RequestStatus::EXTENDING->value,
            RequestStatus::EXTENDED->value,
            RequestStatus::RENEWING->value,
            RequestStatus::RENEWED->value,
            RequestStatus::RECEIVED->value
        ];

        $records = $this->bookReservationModel::query()
            ->with([
                "books.catalog:id,title"
            ])
            ->select("id", "book_id", "to_date", "type")
            ->whereIn("status",$statuses)
            ->forUser($validated["user_id"])
            ->get();

        $duplicates = $records->whereIn("book_id", $book_ids);
        if($duplicates->isNotEmpty()){
            $titles = implode(", ", $records->pluck("books.catalog.title")->toArray());
            throw new DomainException("Duplicate request detected. You already have pending requests for: {$titles}");
        }
    }


    public function storeRequest($validated)
    {
        DB::transaction(function () use ($validated) {
            $this->preparedData($validated);

            $record = $this->createBookRes($validated);

            foreach($validated["data"] as $book) {
                $this->bookReservationModel->create([
                    "book_res_id" => $record->id,
                    "book_copy_id" => $book["book_copy_id"] ?? null,
                    "book_id" => $book["book_id"],
                    "type" => $book["copy_type"],
                    "from_date" => Carbon::parse($validated["from"]),
                    //new
                    "to_date" => match ($validated["role"]) {
                        UserRoleEnum::TRAINEE->value => Carbon::parse($validated["from"])->addDays(6)->setTime(12, 0, 0),
                        UserRoleEnum::TRAINER->value => Carbon::parse($validated["from"])->addDays(14)->setTime(12, 0, 0),
                    },
                ]);
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
    //remove
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
            throw new DomainException("The following books have no available copies: " . $unavailable->implode(', '));
        }
    }
    private function createBookRes($validated) {
        return  $this->bookResModel::create([
            "user_id" => $validated["user_id"],
            "trace_number" => GenerateTrace::createTraceNumber(BookRes::class),
            "type" => $this->bookResModel::TYPE_ONLINE,
        ]);
    }

    public function cancelBookReservation()
    {
        return;
    }

    public function updateBookRequest()
    {
        return;
    }

    public function getLibRequestCount($userId)
    {
        return $this->bookResModel->query()
        ->select(DB::raw("count(*) as status_count"), "status")
        ->forUser($userId)
        ->groupBy("status")
        ->pluck("status_count", "status");
    }
}

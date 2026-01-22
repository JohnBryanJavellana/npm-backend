<?php

namespace App\Services\Trainee\Library;

use App\Enums\RequestStatus;
use App\Models\{BookCart, Book};
use DomainException;
use Illuminate\Support\Facades\DB;

class LibraryCartService {

    public function __construct(
        protected BookCart $bookCartModel,
        protected Book $bookModel
    )
    {}

    public function getCart($request)
    {

        $userId = $request->user()->id;

        if(auth()->id() !== $userId) {
            throw new DomainException("You are not authorized to perform this action.");
        }

        return $this->bookCartModel::query()
            ->with([
                'books.catalog.genre',
                'books' => function($q) {
                    $q->withCount(["copies" => fn($query) => $query->where("status", RequestStatus::AVAILABLE->value)]);
                },
            ])
            ->get();
    }

    public function prepareData($validated, $userId)
    {

        if(auth()->id() !== $userId) {
            throw new DomainException("You are not authorized to perform this action.");
        }

        $exists = $this->bookCartModel->query()
        ->select("id")
        ->where([
            'user_id' => $userId,
            'book_id' => $validated["book_id"]
        ])
        ->exists();

        if ($exists) {
            throw new DomainException("You already added this book to your cart.");
        }
    }

    public function storeToCart($validated, $userId)
    {
        DB::transaction(function() use ($validated, $userId){
            $this->prepareData($validated, $userId);

            BookCart::create([
                "user_id" => $userId,
                "book_id" => $validated["book_id"]
            ]);
        });
    }


    public function prepareCancellingData($validated, $userId)
    {
        if(auth()->id() !== $userId) {
            throw new DomainException("You are not authorized to perform this action.");
        }

        $record = $this->bookCartModel->query()
        ->whereIn("book_id", $validated["book_id"])
        ->where("user_id", $userId)
        ->count();
        \Log::info('Delete prepareCancellingData:', [$validated, $validated["book_id"]]);
        \Log::info('Delete userId:', [$userId]);

        \Log::info("prepareCancellingData", [$record, count($validated["book_id"])]);
        if($record !== count($validated["book_id"])) {
            throw new DomainException("Some of the selected books are invalid, unavailable, or not allowed for this request.");
        }
    }

    public function removeFromCart($validated, $userId)
    {
        DB::transaction(function() use ($validated, $userId) {
        
            $this->prepareCancellingData($validated, $userId);

            $books = $this->bookCartModel->query()
            ->whereIn('book_id', $validated["book_id"])
            ->where('user_id', $userId)
            ->get();

            $books->delete();
        });
    }   
}
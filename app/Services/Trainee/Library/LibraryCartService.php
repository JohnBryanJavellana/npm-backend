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


    public function prepareCancellingData($validated, $userId, $record)
    {
        if(auth()->id() !== $userId) {
            throw new DomainException("You are not authorized to perform this action.");
        }

        if($record->count() !== count($validated["book_id"])) {
            throw new DomainException("Some of the selected books are invalid, unavailable, or not allowed for this request.");
        }
    }

    public function removeFromCart($validated, $userId)
    {
        DB::transaction(function() use ($validated, $userId) {
        
            $books = $this->bookCartModel->query()  
            ->whereIn('id', $validated["book_id"])
            ->where('user_id', $userId);

            $this->prepareCancellingData($validated, $userId, $books);

            $books->delete();
        });
    }   
}
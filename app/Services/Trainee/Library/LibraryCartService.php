<?php

namespace App\Services\Trainee\Library;

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

        return $this->bookModel->query()
        ->with([
            'catalog.genre'
        ])
        ->withCount("copies")
        ->whereHas('carts', function($q)use ($userId) {
            $q->where('user_id', $userId);
        })
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
        ->whereIn("id", $validated["book_id"])
        ->count();

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
<?php

namespace App\Rules\Trainee\Library;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\{User, BookRes, BookReservation};


class UserLibraryRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */

    protected $user;
    protected $max = 5;

    protected $restrictedstatuses = [
            'APPROVED',
            'RECEIVED'
    ];

    public function __construct(?User $user)
    {
        $this->user = $user;
    } 
    
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if($attribute === "book_id") {
            $overDue = BookReservation::isOverDue($this->user->id)
                ->where('status', 'RECEIVED')
                ->exists();

            if ($overDue) {
                $fail("Trainee has a overdue book, please return or check your borrowed list.");
            }

            $max_books = BookReservation::forUser($this->user->id)
                ->forStatus($this->restrictedstatuses)
                ->count();

            if($this->max - $max_books < count($value)) {
                $fail("It looks like you will exceed with your borrowing limit (5 books max). You can return a book to borrow a new one.");
            }

            $bookReservations = BookReservation::forUser($this->user->id)
                ->forNotInUse()
                ->whereIn('book_id', $value)
                ->exists();

            if($bookReservations) {
                $fail("Duplicate request detected. You can only request each book once, check your list.");
            }
        }
        
    }
}

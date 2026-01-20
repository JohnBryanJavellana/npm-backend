<?php

namespace App\Rules\Trainee\Library;

use App\Models\BookReservation;
use Closure;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\ValidationRule;

class BookLibraryRule implements ValidationRule, DataAwareRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */

    protected $data;    
    protected $max = 12;

    public function __construct(public User $user) { }

    public function setData(array $data)
    {
        $this->data = $data;
        return $data;
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        \Log::info("extending...", [$this->data]);
        foreach ($this->data["data"] as $book) {
            $available = BookReservation::whereKey($value)?->value("from_date");
            $fromDate = Carbon::parse($available);
            $date_of_extension = Carbon::parse( $book['extension_date']);
            $days = $fromDate->diffInDays($date_of_extension);

            if ($days > $this->max) {
                $fail("The borrowing period cannot exceed 12 days from the start date.");
            }
        }
    }
}

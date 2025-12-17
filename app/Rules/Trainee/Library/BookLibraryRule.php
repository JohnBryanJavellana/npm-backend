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
        // \Log::info("Value From The King.02 👑", [$value]);
        // $available = BookReservation::whereKey($value)?->value('from_date');
        // $date_of_extension = Carbon::parse($this->data['extension_date']);
        // $days = $available->diffInDays($date_of_extension);

        // if ($days > $this->max) {
        //     $fail("Out of range!");
        // }
        // \Log::info("Data info from king.02 👑", [$available, $date_of_extension, $days]);


    }
}

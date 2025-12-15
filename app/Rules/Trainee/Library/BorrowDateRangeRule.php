<?php

namespace App\Rules\Trainee\Library;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class BorrowDateRangeRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */

    protected $max_days = 7;

    public function __construct(public $from) {}
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $from_date = Carbon::parse($this->from);
        $to_date = Carbon::parse($value);
        $days = $from_date->diffInDays($to_date);

        if($days > $this->max_days) {
            $fail("Please choose a date range of no more than 7 days.");
        }
    }
}

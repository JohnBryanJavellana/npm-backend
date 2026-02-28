<?php

namespace App\Rules\Trainee\Library;

use App\Enums\RequestStatus;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\{BookRes, BookReservation, User};
use Illuminate\Contracts\Validation\DataAwareRule;

class UserLibraryRule implements ValidationRule , DataAwareRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    protected $data;

    protected $restrictedstatuses = [
            'PENDING',
            'APPROVED',
            'RECEIVED'
    ];

    public function setData(array $data)
    {
            $this->data = $data;
            return $data;
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $exists = BookRes::query()
        ->forUser($value)
        ->where("status", RequestStatus::FOR_CSM->value)
        ->exists();

        if($exists) {
            $fail("You still have a request with a “FOR CSM” status. Please fill it out before submitting a new request.");
        }
        
        $overDues = BookReservation::query()
        ->where('to_date', '<', now())
        ->where("type", "HARD-COPY")
        ->count();

        if($overDues) {
            $fail("You have an overdue book" . (($overDues > 1) ? 's' : '') . ", please return or check your borrowed list.");
        }
    }
}

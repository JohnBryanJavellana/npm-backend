<?php

namespace App\Rules;

use App\Models\BookRes;
use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

use function PHPUnit\Framework\isType;

class ExtensionDateRangeRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    protected $max = 5;

    public function __construct(public $reference_id) {}
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $record_date = BookRes::find($this->reference_id)?->to_date;
        $extension = Carbon::parse($record_date);
        $extension_date = Carbon::parse($value);
        $days = $extension->diffInDays($extension_date);
        if($days > $this->max) {
            $fail("Range date invalid, extension must not exceed for 5 days.");
        }
    }
}

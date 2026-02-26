<?php

namespace App\Rules\Trainee\Recreational;

use Closure;
use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\ValidationRule;

class QuantityRule implements ValidationRule, DataAwareRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */

    protected $data;

    public function setData(array $data)
    {
        $this->data = $data;
        return $data;
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        preg_match('/data\.(\d+)\.quantity/', $attribute, $matches);
        $index = $matches[1] ?? null;

        $row = $this->data['data'][$index] ?? [];

        if (empty($row['UI']) && (int) $value < 1) {
            $fail("No Item selected");
        }
    }

}

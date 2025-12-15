<?php

namespace App\Rules\Admin;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;

class GoogleCaptchaRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $captchaResponse = Http::post("https://www.google.com/recaptcha/api/siteverify", [
            'secret' => env('NOCAPTCHA_SECRET'),
            'response' => $value,
        ]);

        if (!$captchaResponse->successful()) {
            $fail('The reCAPTCHA verification failed. Please try again.');
            return;
        }
    }
}

<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class PhoneNumberRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // regex:/^([0-9\s\-\+\(\)]*)$/
        if (! preg_match('/^[0-9+\(\)\-\.\s]+$/', $value)) {
            $fail('The :attribute must be a valid phone number.');
        }
    }
}

<?php

namespace App\Rules;

use Illuminate\Support\Str;
use Illuminate\Contracts\Validation\Rule;

class IsGitHubUrl implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (Str::startsWith($value, 'https://github.com')) {
            return true;
        }
        
        if (Str::startsWith($value, 'http://github.com')) {
            return true;
        }

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'You must submit a github url ex. "http(s)://github.com/user/repo"';
    }
}

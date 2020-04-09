<?php

namespace App\Rules;

use App\Services\GitHub;
use Illuminate\Support\Str;
use Illuminate\Contracts\Validation\Rule;

class IsValidGitHubRepoUrl implements Rule
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
        return app(GitHub::class)->isValidRepoUrl($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'You must submit a valid github repo url, and the repo must also be publicly accessible.';
    }
}

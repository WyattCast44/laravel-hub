<?php

namespace App\Rules;

use App\Services\Github;
use Illuminate\Contracts\Validation\Rule;

class ValidRepoUrl implements Rule
{
    protected $client;

    public function __construct(Github $client)
    {
        $this->client = $client;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $this->client->isValidRepoUrl($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'You must submit a valid Github Repo URL, and the repo must also be publicly accessible.';
    }
}

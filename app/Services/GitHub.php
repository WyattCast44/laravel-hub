<?php

namespace App\Services;

use GitHub\Client as GitHubClient;

class GitHub
{
    protected $client;
    
    public function __construct(GitHubClient $client)
    {
        $this->client = $client;
    }

    public function api($api)
    {
        return $this->client->api($api);
    }

    /**
     * Get a users details by username
     *
     * @link https://github.com/KnpLabs/php-github-api/blob/master/doc/users.md
     * @source https://github.com/tightenco/novapackages/blob/master/app/Http/Remotes/GitHub.php
     */
    public function user($username)
    {
        return $this->api('users')->show($username);
    }

    // /**
    //  * Get all issues labeled "suggestion".
    //  *
    //  * @return array of items
    //  */
    // public function packageIdeaIssues()
    // {
    //     return Cache::remember(CacheKeys::packageIdeaIssues(), 1, function () {
    //         $issues = collect($this->github->api('search')->issues('state:open label:package-idea repo:tightenco/nova-package-development')['items']);

    //         return $this->sortIssuesByPositiveReactions($issues);
    //     });
    // }

    // protected function sortIssuesByPositiveReactions($issues)
    // {
    //     return $issues->sortByDesc(function ($issue) {
    //         $countReactionTypes = collect($issue['reactions'])
    //             ->except(['url', 'total_count'])
    //             ->filter()
    //             ->count();

    //         return $countReactionTypes
    //          + Arr::get($issue, 'reactions.total_count')
    //          - (2 * Arr::get($issue, 'reactions.-1'))
    //          - Arr::get($issue, 'reactions.confused');
    //     });
    // }

    // public function api($api)
    // {
    //     return $this->github->api($api);
    // }

    // public static function validateUrl($url)
    // {
    //     return (bool) preg_match('/github.com\/([\w-]+)\/([\w-]+)/i', $url);
    // }
}

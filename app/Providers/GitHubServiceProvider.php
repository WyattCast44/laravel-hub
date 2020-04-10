<?php

namespace App\Providers;

use App\Services\GitHub;
use Github\Client as GitHubClient;
use Illuminate\Support\ServiceProvider;

class GitHubServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(GitHubClient::class, function ($app) {

            // Init the client with the newest api version
            // @link https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/

            $client = new GitHubClient(null, 'machine-man-preview');

            // Authenticate with the client
            // @link https://github.com/KnpLabs/php-github-api/blob/master/doc/security.md

            if (auth()->check()) {
                $client->authenticate(
                    auth()->user()->auth_token,
                    null,
                    GitHubClient::AUTH_HTTP_TOKEN
                );
            } else {
                $client->authenticate(
                    config('services.github.client_id'),
                    config('services.github.client_secret'),
                    GitHubClient::AUTH_HTTP_PASSWORD
                );
            }

            return $client;
        });

        $this->app->singleton(GitHub::class, function () {
            return new GitHub(app(GitHubClient::class));
        });
    }
}

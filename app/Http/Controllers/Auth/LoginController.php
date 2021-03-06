<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\User as SocialUser;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')
            ->scopes(config('services.github.scopes'))
            ->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        try {

            // Try to get the user from github
            $githubUser = Socialite::driver('github')->user();
        } catch (\Exception $e) {

            // Catch any errors from githib
            report($e);

            if (app()->environment('local')) {
                throw $e;
            }

            flash('status', 'error', "We are having an error authenticating with GitHub, please try again in a few minutes.");

            return redirect('/');
        }

        // Look for existing user with username
        $user = User::where('username', $githubUser->getNickname())->first();

        if ($user === null) {

            // No user with that username exists, create new user
            $user = $this->registerNewUser($githubUser);

            flash('status', 'success', "Hello {$user->name}, your account has been created!");
        } elseif ($user->unclaimed) {

            // User exists, but is an unclaimed account, lets claim it and set it up
            $user = $this->claimUserAccount($user, $githubUser);

            flash('status', 'success', "Hello {$user->name}, your account has been claimed!");
        } else {

            // User exists and is claimed, just a normal update and login
            $user = $this->updateUser($user, $githubUser);
        }

        $this->loginUser($user);

        return redirect('/');
    }

    public function showError()
    {
        return view('auth.errors.show');
    }

    protected function registerNewUser(SocialUser $user)
    {
        $user = User::create([
            'username' => Str::slug($user->nickname),
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar,
            'auth_provider' => 'github',
            'auth_token' => $user->token,
            'bio' => $user->user['bio'],
            'blog' => $user->user['blog'],
            'meta' => json_encode($user->user),
        ]);

        return $user;
    }

    protected function updateUser(User $user, SocialUser $githubUser)
    {
        $user->update([
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'avatar' => $githubUser->avatar,
            'bio' => $githubUser->user['bio'],
            'blog' => $githubUser->user['blog'],
            'auth_token' => $githubUser->token,
            'meta' => json_encode($githubUser->user),
        ]);

        return $user;
    }

    public function claimUserAccount(User $user, SocialUser $githubUser)
    {
        $user->update([
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'avatar' => $githubUser->avatar,
            'bio' => $githubUser->user['bio'],
            'blog' => $githubUser->user['blog'],
            'auth_token' => $githubUser->token,
            'unclaimed' => false,
            'meta' => json_encode($githubUser->user),
        ]);

        return $user;
    }

    protected function loginUser(User $user)
    {
        auth()->login($user, true);

        return;
    }
}

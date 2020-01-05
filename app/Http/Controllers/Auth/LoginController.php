<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Socialite;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
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
                ->scopes(['user:email'])
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
            $githubUser = Socialite::driver('github')->user();
        } catch (\Exception $e) {
            report($e);

            if (app()->environment('local')) {
                throw $e;
            }

            return redirect()->route('auth.errors.show');
        }

        $user = User::where('email', $githubUser->email)->first();
        
        if ($user === null) {
            $user = $this->registerNewUser($githubUser);
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
            'meta' => json_encode($user->user),
        ]);

        return $user;
    }

    protected function loginUser(User $user)
    {
        auth()->login($user, true);

        return;
    }
}

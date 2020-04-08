<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserSettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return view('settings.index');
    }

    public function resync()
    {
        if (auth()->user()->syncWithGitHub()) {
            flash('status', 'success', 'Your account has resynced with GitHub!');
        } else {
            flash('status', 'error', 'An error occurred while syncing with GitHub, please try again.');
        }

        return redirect()->route('app.settings.index');
    }

    public function delete()
    {
        $user = auth()->user();

        auth()->logout();

        $user->delete();

        flash('status', 'success', 'Your account has been deleted!');

        return redirect()->route('index');
    }
}

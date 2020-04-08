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
        auth()->user()->syncWithGitHub();

        flash('status', 'success', 'Your account has resynced with GitHub!');

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

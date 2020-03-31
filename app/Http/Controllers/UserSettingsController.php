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
        $user = auth()->user();

        return view('settings.index');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserSettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(['auth', 'password.confirm'])->only('delete');
    }

    public function show()
    {
        $user = auth()->user();

        return view('settings.index');
    }

    public function delete()
    {
        auth()->logout();

        flash('status', 'success', 'Your account has been deleted!');
    }
}

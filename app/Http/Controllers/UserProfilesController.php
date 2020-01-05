<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserProfilesController extends Controller
{
    public function show(User $user, Request $request)
    {
        return view('users.show', [
            'user' => $user,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserPackagesController extends Controller
{
    public function show(User $user)
    {
        $user->load(['packages']);

        return view('users.packages.show', [
            'user' => $user,
            'packages' => $user->packages()->paginate(),
        ]);
    }
}

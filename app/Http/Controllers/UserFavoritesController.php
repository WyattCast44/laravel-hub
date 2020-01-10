<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserFavoritesController extends Controller
{
    public function show(User $user)
    {
        $user->load(['favorites']);

        return view('users.favorites.show', [
            'user' => $user,
            'favorites' => $user->favorites()->paginate(),
        ]);
    }
}

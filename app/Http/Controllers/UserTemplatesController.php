<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserTemplatesController extends Controller
{
    public function show(User $user)
    {
        $user->load(['templates']);

        return view('users.templates.show', [
            'user' => $user,
            'templates' => $user->templates()->paginate(),
        ]);
    }
}

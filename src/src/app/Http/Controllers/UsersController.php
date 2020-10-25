<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show(User $user) {

        $user = User::where('name', $user->name)->first();

        return view('users.show', ['user' => $user]);

    }
}

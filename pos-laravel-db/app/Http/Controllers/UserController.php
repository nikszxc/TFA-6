<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    // User Accounts page (/users)
    public function index()
    {
        return view('users', [
            'title' => 'User Accounts',
            'users' => User::orderBy('id')->get(),
        ]);
    }
}

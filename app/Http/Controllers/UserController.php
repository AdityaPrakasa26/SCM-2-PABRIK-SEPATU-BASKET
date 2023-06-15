<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();

        return view('admin.index', [
            'user' => $user,
        ]);
    }
}

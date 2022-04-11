<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function create()
    {
        return view('signup');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required'],
            'password' => ['required', 'confirmed'],
        ]);

        DB::insert(
            'insert into users (`name`, `email`, `password`) values (:name, :email, :password)',
            ['name' => $request->username, 'email' => $request->email, 'password' => Hash::make($request->password)]
        );
        return view('home');
    }
}

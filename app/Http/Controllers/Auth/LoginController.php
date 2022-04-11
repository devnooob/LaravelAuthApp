<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function in(Request $request)
    {

        $formFields = $request->only(['name', 'password']);
        $name = ($formFields['name']);
        $users = DB::select("select * from users where name = '$name'");
        foreach ($users as $user) {
            if (Hash::check($formFields['password'], $user->password)) {
                Auth::attempt($formFields);
                return redirect(route('home'));
            } else {
                return redirect(route('login'))->withErrors(['Что-то пошло не так']);
            }
        }
    }

    public function out(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

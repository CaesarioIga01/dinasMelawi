<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Accounts;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('pages.admin.login.login');
    }

    public function postLogin(Request $request)
    {
        if(Auth::attempt(['name' => $request->name, 'email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin');
        }
        return redirect('/')->with('Message', 'Email atau Password salah');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function cekLogin(Request $request)
    {
        $validate = $request->validate([
            "email" => "required|email|max:255",
            "password" => "required"
        ]);

        if(Auth::attempt($validate)) {
            $request->session()->regenerate();

            if(Auth::user()->role === "admin"){
                return redirect()->intended('/admin/home'); // jika usernya adalah admin maka masuk ke halaman dashboard admin
            }   else {
                return redirect()->intended('/user/dashboarduser'); // jika usernya bukan admin maka masuk ke halaman user
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}

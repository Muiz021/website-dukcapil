<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('Login.login');
    }

    public function dashboard_admin()
    {
        return view('Admin.Dashboard.dashboard');
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            if (auth()->user()->roles == 'admin') {
                return redirect()->route('dashboard-admin');
                return view('Admin.Dashboard.dashboard')->with('users', $request);
            } else {
                if (auth()->user()->roles == 'user' && auth()->user()->is_verification == 1) {
                    return redirect()->route('profil-user');
                    return view('user.profiluser')->with('users', $request);
                } else {
                    return back()->with('wait', 'akun anda belum di verifikasi oleh admin');
                }
            }
        }
        return back()->withErrors([
            'password' => 'Username atau Password anda salah',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
